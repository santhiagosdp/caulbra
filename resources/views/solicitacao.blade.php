@extends('app')
  
@section('titulo')
                SOLICITAÇÃO
@stop
  
@section('conteudo')
	<h1 align="center">SOLICITAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-6 text-left">
		<form action="/enviar" method="POST">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 
		  <div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
		  </div>
	 
		  <div class="form-group">
			<label for="email">E-Mail</label>
			<input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
		  </div>
	 
		  <div class="form-group">
			<textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem"></textarea>
		  </div>
	 
		  <button type="submit" class="btn btn-default">Confirmar</button>
	 
		</form>
	</div>
	<div class ="col-sm-4 text-left">
				<br></br>
				<button class="btn btn-primary">
					<span aria-hidden="true"></span> Consultar
				</button>
				<br></br>
				<button class="btn btn-warning">
					<span aria-hidden="true"></span> Imprimir Termo
				</button>
	</div>
@stop