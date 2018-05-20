@extends('app')

@section('titulo')
                Validação
@stop

@section('conteudo')
	<h1 align="center">VALIDAÇÃO</h1>
	<hr noshade></hr>
	<div class ="col-sm-8 text-left">
    <div id="my_camera"></div>
	   <!-- First, include the Webcam.js JavaScript Library -->
	    <!-- <script type="text/javascript" src="webcam.js"></script> -->
	     <!-- Configure a few settings and attach camera -->
	      <script language="JavaScript">
		      Webcam.set({
			         width: 600,
			         height: 460,
			         image_format: 'jpeg',
			         jpeg_quality: 90
		      });
		        Webcam.attach( '#my_camera' );
	       </script>

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
