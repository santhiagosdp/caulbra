@extends('app')
  
@section('titulo')
SEJA BEM VINDO
@stop
  
@section('conteudo')
	<div class ="col-sm-8 text-left">
		<form action="/slc" method="POST">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  
		  <button type="submit" class="btn btn-info">INICIAR</button>
	 
		</form>
	</div>
@stop