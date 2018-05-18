@extends('app')
  
@section('titulo')
                SOLICITAÇÃO
@stop
  
@section('conteudo')
	<h1 align="center">SOLICITAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-8 text-left">
		<form action="/vld" method="POST">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 
		  <div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" id="cpf" name="cpf" class="form-control" placeholder="cpf">
		  </div>

		  <div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
		  </div>
		  	 
		  <div class="form-group">
			<label for="email">E-Mail</label>
			<input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
		  </div>
	 
		  <button type="submit" class="btn btn-success">Confirmar</button>
	 
		</form>
	</div>
	<div class ="col-sm-2 text-left">
				<br>
				<button class="btn btn-primary">Consultar</button>
				<br></br>
				<br></br>
				<br></br>
				<button class="btn btn-warning">Imprimir Termo</button>
	</div>
@stop