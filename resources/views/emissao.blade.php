@extends('app')

@section('titulo')
                Emissão
@stop

@section('conteudo')
<!-- <script type="text/javascript" src="./FileSaver.min.js"></script> -->
    <script>
  function teste()
    {
      let texto = " openssl genrsa -des3 -out titular/private/testebat.key 1024 \n\n"
      +
      "openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 -key ca/caulbra.key -out titular/cer/testebat.cer \n\n"
      +
      "openssl req -new -config ca/openssl.conf -key titular/private/testebat.key -out titular/csr/testebat.csr \n\n"
      +
      "openssl ca -config ca/openssl.conf -extensions v3_ca -days 365 -in titular/csr/testebat.csr -notext -out titular/crt/testebat.crt \n\n"
      +
      "openssl pkcs12 -export -out titular/certs_pfx/testebat.pfx -inkey titular/private/testebat.key -in titular/crt/testebat.crt -certfile ca/caulbra.crt";
      let titulo = "num CPF titular"; //titulo sera o CPF do titular
      var blob = new Blob([texto], { type: "text/plain;charset=utf-8" });
      saveAs(blob, titulo + ".bat"); //Colocar para salvar em uma pasta especifica
      // Aqui comando para executar o .bat gerado anteriormente

  }
</script>

<h1 align="center">EMISSÃO</h1>
<hr noshade></hr>
<div class ="col-sm-8 text-left">
  <form action="/slc" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">



    <button onclick="teste()" type="submit" class="btn btn-success">Finalizar</button>

  </form>
</div>
<div class ="col-sm-2 text-left">


</div>
@stop
