@extends('app')
  
@section('titulo')
                Validação
@stop
  
@section('conteudo')
	<h1 align="center">VALIDAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-8 text-left">
		<div class="form-group">
			<canvas id="canvas" width="300" height="175"></canvas>
				<input type="button" value="Capturar" id="save" />
		</div>
	</div>
	<div class ="col-sm-2 text-left">
		<!-- Anexar arquivos -->
		<script type="text/javascript" src="up.js"></script>
		<div id="filename"></div>
		<div id="progress"></div>
		<div id="progressBar"></div>

		<input type="file" name="file">
	</div>
	<div class="row content" align="center">
		<div class ="col-sm-12 text-left">
			<div align="center">
				<form action="/ems" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<button type="submit" class="btn btn-primary">Confirmar</button>
					<button class="btn btn-danger">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
@stop