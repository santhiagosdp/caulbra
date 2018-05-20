@extends('app')

@section('titulo')
                Validação
@stop

@section('conteudo')
	<h1 align="center">VALIDAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-6 text-left">

        <button class="btn start-video" title='Câmera'>Abrir Câmera</button>
        <button class="btn stop-video" title='Stop'>Fechar Câmera</button>
        <button class="btn take-picture" title='Tirar uma foto'> Clic 📷 </button>

        <video style="width:80%" id="videoFeed"></video>
        <canvas id="picture-canvas"></canvas>

	</div>

	<div class ="col-sm-2 text-left">
    <h2>teste</h2>
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
