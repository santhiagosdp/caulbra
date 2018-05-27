@extends('app')

@section('titulo')
                Validação
@stop

@section('conteudo')

<form action="/ems" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="anexos">
    <br>
    <input type="submit" class="btn btn-success"> 
</form>

  	<label>CPF: {{ $cpf }} </label>
@stop
