@extends('app')
  
@section('titulo')
                SOLICITAÇÃO
@stop
  
@section('conteudo')
<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
	<h1 align="center">SOLICITAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-2 text-left">
	</div>
	<div class ="col-sm-8 text-left">
		<form action="/vld" method="POST">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}" >
	 
		<div class="form-group">
			<label for="cpf">CPF:</label>
			<input type="text" id="cpf" name="cpf" size="50" minlength="11" maxlength="11" required="preenchimento Obrigadorio" aria-describedby="smallcpf" class="form-control" placeholder="cpf" onkeypress='return SomenteNumero(event)'>
			<small id="smallcpf" class="text-muted">
             	Apenas números
            </small>
		</div>
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" aria-describedby="smallnome" pattern="[a-zA-Z\s]+$" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required="preenchimento Obrigadorio">                 
		  	<small id="smallnome" class="text-muted">
             	Apenas Letras
            </small>
        </div>
		  	 
		<div class="form-group">
			<label for="email">E-Mail</label>
			<input type="email" id="email" aria-describedby="smallemail"  name="email" class="form-control" placeholder="mail@mail.com" required="preenchimento Obrigadorio">
			<small id="smallemail" class="text-muted">
	        	ex. usuario@mail.com
	        </small>
       	</div>

		<div class="form-group">
			<label for="fone">Telefone: ex. 99 9999-9999</label>
			<input type="text" required="required" maxlength="15" name="fone" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{4}$"  id="fone" name="fone" size="50" required="preenchimento Obrigadorio" class="form-control" placeholder="99 9999-9999"'>
			<small id="smallemail" class="text-muted">
	        	ex. 99 9999-9999
	        </small>

		</div>
 
		  <button type="submit" class="btn btn-success">Confirmar</button>
	 
		</form>
	</div>
	<div class ="col-sm-2 text-left">
	</div>
@stop