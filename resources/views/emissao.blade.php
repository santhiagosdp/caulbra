@extends('app')

@section('titulo')
                Emissão
@stop

@section('conteudo')
  <div class="row">
    <h1 align="center">EMISSÃO</h1>
    <hr noshade></hr>
    <div class="col-md-2">
    </div>
    <div  class ="col-md-8">
      <!-- <form action="/gerar" method="POST"> -->
      <form method="POST" action="/suc" class="form-inline">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-muted">
                <!-- senha para certificado do solicitante -->
                <label for="senhatitular"> Titular, digite sua senha:</label><br>
                  <input size="25" maxlength=8 required="preenchimento Obrigadorio" class="form-control mx-sm-3" aria-describedby="heppass" type="password" id="senhatitular" name="sensenhatitularha" placeholder="Titular, crie uma senha"><br>
                    <small id="heppass" class="text-muted">
                    Deve ter de 4 a 8 numeros.
                    </small>
                <br>
                <br>
                <label for="conf_senha"> Titular, confirme sua senha:</label><br>
                  <input size="25" maxlength=8 required="preenchimento Obrigadorio" class="form-control" type="password" id="conf_senha" name="conf_senha" placeholder="Titular, Confirme a senha">
                <br><br>
              </div>
              <div class="col-md-6 text-muted">
                <!-- senha para certificado da CA -->
                <label for="senhaCa"> Senha da CA:</label><br>
                  <input size="25" required="preenchimento Obrigadorio" class="form-control" type="password" id="senhaCa" name="senhaCa" placeholder="Agente, senha da CA"><br>
                <br>
                <button type="submit" class="btn btn-success "><b>Emitir Certificado para ...</b></button>
                <br><br>
                <label for="cpf"> CPF:</label><br>
                <input size="25" class="form-control" readonly="readonly" id="cpf" name="cpf" value={{$cpf}}>
              </div>
            </div>      
          </div>
      </form>
    </div>
    <div class="col-md-2">
    </div>
  </div>
  <hr noshade></hr>
@stop