@extends('app')

@section('titulo')
                Emissão
@stop

@section('conteudo')
<!-- <script type="text/javascript" src="./FileSaver.min.js"></script> -->
  <script>
    var teste = function(cpf,senha)
    {
      var cpft= cpf;
      var senhat = senha;
      alert(cpft+" e senha: "+senhat);
      //GERANDO ARQUIVO.BAT e fazendo Download
      let texto = "cd C:/xampp/htdocs/docs/Estagio/caulbra/ca\nmkdir titular\nopenssl genrsa -des3 -passout pass:"+senhat+" -out titular/"+cpft+".key 2048\nopenssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 -key ca/caulbra.key -out titular/"+cpft+".cer\nopenssl req -new -config ca/openssl.conf -key titular/"+cpft+".key -out titular/"+cpft+".csr\nopenssl ca -config ca/openssl.conf -extensions v3_ca -days 365 -in titular/"+cpft+".csr -notext -out titular/"+cpft+".crt \n\openssl pkcs12 -export -out titular/"+cpft+".pfx -inkey titular/"+cpft+".key -in titular/"+cpft+".crt -certfile ca/caulbra.crt\nwinrar a emitidos/"+cpft+".rar titular/*.*\nrmdir /s /q titular";
          

          let titulo = cpft //"num CPF titular"; //titulo sera o CPF do titular
          var blob = new Blob([texto], { type: "text/plain;charset=utf-16" });

          saveAs(blob, titulo + ".bat");
          // Colocar para salvar em uma pasta especifica
          // Aqui comando para executar o .bat gerado anteriormente
    }
  </script>

<h1 align="center">EMISSÃO</h1>
<hr noshade></hr>
<div class ="col-sm-2 text-left">
</div>
<div  class ="col-sm-8 text-left">
  <!-- <form action="/gerar" method="POST"> -->
  <form method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- senha para certificado.key -->
    <input class="form-control" id="senha" name="senha" placeholder="digite a senha para certificado.key"></input>
    <br>
    <input class="form-control" id="conf_senha" name="conf_senha" placeholder="Confirme a senha digitada acima"></input>
    <br>

    <button onclick="teste(cpf.value, senha.value)"  type="submit" class="btn btn-success">Finalizar certificado para ... </button>
    <!-- <button onclick="teste()" type="submit" class="btn btn-success">Finalizar</button> -->
    <br><br>
      <label for="cpf"> CPF:</label>
        <input class="form-control" readonly="readonly" id="cpf" name="cpf" value={{$cpf}}></input>
  </form>
</div>
<div class ="col-sm-2 text-left">

</div>
@stop