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
        <button class="btn take-picture" title='Tirar uma foto'> Foto 📷 </button>
        <br></br>

        <video style="width:70%" id="videoFeed"></video>
        <!-- <canvas id="picture-canvas"></canvas> -->
	</div>
  <h2> Imagem capturada</h2>  	
	<div class ="col-sm-6 text-left">
    <canvas style="width:70%" id="picture-canvas"></canvas>

    <div align="center">
				<form action="/ems" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<label> CPF:..</label><input readonly="readonly" id="cpf" name="cpf" value={{$cpf}}></input>
					<br><br>
					<button type="submit" class="btn btn-primary">Confirmar</button>
					<button class="btn btn-danger">Cancelar</button>
				</form>
			</div>
	</div>
@stop
