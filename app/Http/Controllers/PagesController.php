<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\cpftitular;
use  App\Emitidos;
use Mail;

class PagesController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function solicitacao()
    {
		return view('solicitacao');
    }

	  public function validacao()
    {
		return view('validacao');
    }

    public function emissao()
    {
		return view('emissao');
    }

// shell_exec para emitir certificado
    public function emit(Request $request)   // rota /suc
    {
    $dados = cpftitular::orderBy('created_at','desc')->get()->first();
    $emitidos = Emitidos::orderBy('created_at','desc')->get()->first();
    // dd($dados->nome); //verificar quais dados vem 
    //dd($dados);
     $senhas = $request->all();
    //dd($senhas['senhatitular']);  // trás senha titular digitadas

    date_default_timezone_set('America/Sao_Paulo');
    $date = date('YmdHi');

    //Pega serial atual para salvar no BD
    $serial=implode("\n",file('C:\xampp\htdocs\docs\Estagio\caulbra\ca\ca\serial.txt'));

    //Apagar pasta titular e arquivo cpf.bat, Se existir de algum erro.
    $del='C:\xampp\htdocs\docs\Estagio\caulbra\ca\emitidos\del.bat
    ';  
    shell_exec($del); 

    //fopen cria arquivo .bat
    $fp = fopen('C:\xampp\htdocs\docs\Estagio\caulbra\ca\cpf.bat', 'w');
    
    //fwrite escreve no arquivo .bat
    fwrite($fp, 'cd C:\xampp\htdocs\docs\Estagio\caulbra\ca

mkdir titular

openssl genrsa -des3 -passout pass:'.$senhas['senhatitular'].' -out titular/priv.key 2048

openssl req -new -config ca/openssl.conf -key titular/priv.key -out titular/req.csr -passin pass:'.$senhas['senhatitular'].' -subj "/C=BR/ST=TO/L=Palmas/O=Ulbra/CN='.$dados['nome'].'-'.$dados['cpf'].'"

openssl ca -extensions v3_ca -days 365 -in titular/req.csr -out titular/pub.cert -passin pass:'.$senhas['senhaCa'].' -config ca/openssl.conf -batch 

openssl pkcs12 -export -out titular/parawindows.pfx -inkey titular/priv.key -in titular/pub.cert -certfile ca/caulbra.crt -passout pass:'.$senhas['senhatitular'].' -passin pass:'.$senhas['senhatitular'].'

winrar a emitidos/'.$dados['cpf'].$date.'.rar titular/*.*

');
    //fclose conclui o arquivo .bat
    fclose($fp);
    $execut= 'C:\xampp\htdocs\docs\Estagio\caulbra\ca\cpf.bat
    ';       
    //shell_exec para executar o arquivo .bat
    shell_exec($execut);
    
    //atualizando tabela
    $bd=implode("\n",file('C:\xampp\htdocs\docs\Estagio\caulbra\ca\ca\index.txt'));
    // serial sendo pego antes de gerar certificado, pois quando gera o serial eh alterado no arquivo
    //$serial=implode("\n",file('C:\xampp\htdocs\docs\Estagio\caulbra\ca\ca\serial.txt'));
    //dd($serial);    

    $emitidos = new Emitidos();
    $emitidos->cpf = $dados['cpf'];
    $emitidos->nome = $dados['nome'];
    $emitidos->logCert = $bd;  //pega arquivo de BD da CA
    $emitidos->serial = $serial;
    $emitidos->save();

    //zerando os arquivos index e serial
    $index = fopen('C:\xampp\htdocs\docs\Estagio\caulbra\ca\ca\index.txt','w');
    fwrite($index,"");
    fclose($index);

    // $serial = fopen('C:\xampp\htdocs\docs\Estagio\caulbra\ca\ca\serial.txt','w');
    // fwrite($serial,"01");
    // fclose($serial);

    //dd($dados);
    $mail = $dados['email'];
    //dd($mail);

    //Verificando se existe arquivo .pfx
    // $pfx = file('C:\xampp\htdocs\docs\Estagio\caulbra\ca\titular\parawindows.pfx');  
    // dd($pfx);

    if (file_exists('C:\xampp\htdocs\docs\Estagio\caulbra\ca\titular\parawindows.pfx')){
        //dd("encontrou arquivo == true");
        //enviando e-mail
        $data = array('name'=>$dados['nome']);
          Mail::send('mail', $data, function($message) use ($mail) {
            $message->to($mail,'')->subject
                ('Certificado digital - CAULBRA');
                //$message->attach($pathToFile);
                $message->attach('C:\xampp\htdocs\docs\Estagio\caulbra\ca\titular\parawindows.pfx');
                $message->from('ca.caulbra.to@gmail.com','CAULBRA');
          });
         // echo "Email Sent with attachment. Check your inbox.";

          shell_exec($del);  //deletando a pasta titular e tbm arquivo cpf.bat criado no inicio deste funcao


        //rota após emissão do cd

        return view('home');
    }
    else{
        //dd("Arquivo não Existe!");
        return view('emissao');
    }
    }
}
