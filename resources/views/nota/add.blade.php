@extends('layouts.app')

<body>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div class="container" style="margin-top:6rem;">
<h1> Crear Nota</h1>
<form action="{{ action('NotaController@save') }}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nota</label>
    <input type="text" class="form-control" name="des" placeholder="Nota">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>
</body>