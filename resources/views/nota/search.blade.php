<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
<div class="container">
<a href="{{action('HomeController@index')}}" class="volver">
  <i class="fas fa-arrow-left"></i>
</a>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
  @if(isset($nota))
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
    @else
    <h1 class="text-white bg-dark">No existen notas con es nombre<h1>
    @endif
</div>
<script src="{{ asset('js/app.js') }}"></script>
