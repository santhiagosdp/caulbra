@extends('app')

@section('titulo')
                Validação
@stop

@section('conteudo')
	<div class="row">
    <h1 align="center">VALIDAÇÃO</h1>
    <hr noshade></hr>
    <div class="col-md-2">
    	
    </div>

    <div class="col-md-8">
   		<form method="post" action="/emitir" enctype="multipart/form-data">
   			<input type="hidden" name="_token" value="{{ csrf_token() }}">	
   			<div id="final" class="form-group invisivel radio">
   				<div class="form-group">
   					<label for="arquivotitular">Anexar <b>RG, CPF e Termo de emissão assinado.</b>:</label>
   					<div class="input-group margin-bottom-sm">
   						<span class="input-group-addon"><i class="fa fa-upload fa-fw" aria-hidden="true"></i></span>
   						<input required="" name="arquivotitular[]" class="form-control" type="file" placeholder="ANEXAR RG">

   						<input name="arquivotitular[]" class="form-control"type="file" placeholder="Anexar consulta de CPF">

   						<input name="arquivotitular[]" class="form-control"type="file" placeholder="Termo de emissão assinado">
   					</div>
   					<small id="emailHelp" class="form-text text-muted">Preferivelmente Arquivos PDF.</small>
   				</div>
   			</div>
   			<button type="submit" class="btn btn-primary">Confirmar</button>
   			<button class="btn btn-danger">Cancelar</button>
    </div>

    <div class="col-md-2">
    	
    </div>



<!-- modelo de captura de imagem com webCam -->

	<!-- <h1 align="center">VALIDAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-6 text-left">

        <button class="btn start-video" title='Câmera'>Abrir Câmera</button>
        <button class="btn stop-video" title='Stop'>Fechar Câmera</button>
        <button class="btn take-picture" title='Tirar uma foto'> Foto 📷 </button>
        <br></br>

        <video style="width:70%" id="videoFeed"></video> -->
        <!-- <canvas id="picture-canvas"></canvas> -->
<!-- 	</div>
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
	</div> -->
@stop
