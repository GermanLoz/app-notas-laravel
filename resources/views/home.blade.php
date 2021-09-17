@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container" style="margin-top:8rem;">
<h1> MIS NOTAS </h1>

<form class="d-block" action="{{ action('NotaController@search')}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label class="text-white" for="exampleInputEmail1">Titulo</label>
    <input type="text" class="form-control" name="nombre"  style="font-size:16px;" placeholder="Titulo">
    <button style="font-size:16px;" type="submit" class="btn btn-primary mt-3 pt-3 pb-3 btn-lg btn-block">SEARCH</button>
   </div>
  </form>
    <div class="panel panel-default bg-success">
    <a href="{{ action('NotaController@addFruta')}}" class="text-white">Agregar Nota</a>
</div>
         @foreach($notas as $nota)
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        {{$nota->nombre}}
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>{{$nota->descripcion}}</strong>  
      </div>
      <a href="{{ action('NotaController@detalle', ['id' => $nota->id] ) }}">
                 {{$nota->nombre}}
             </a>
                 <a href="{{ action('NotaController@delete',['id' => $nota->id]) }}">Eliminar</a>
                 <a href="{{ action('NotaController@edit',['id' => $nota->id]) }}">Editar</a>
     </div>
   </div>
</div>
@endforeach
</div>
@endsection
