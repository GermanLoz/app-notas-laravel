@extends('layouts.app')

<script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<body class="bg-dark">
<div class="container mt-5">
<h1 class="text-white mt-5">Editar</h1>
<form action="{{ action('NotaController@editar',['id' => $editar]) }}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label class="text-white" for="exampleInputEmail1">Titulo</label>
    <input type="text" class="form-control" name="nombre"
    value="{{$nota->nombre}}"/>
  </div>
  <div class="form-group">
    <label class="text-white" for="exampleInputPassword1">Nota</label>
    <input type="text" class="form-control" name="des"
    value="{{$nota->descripcion}}"/>
  </div>
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>
</body>