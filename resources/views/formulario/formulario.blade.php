<h1> Formulario en laravel </h1>

<form action="{{ action('NotaController@recibir') }}" method="POST"> 
    {{ csrf_field()}}
    <input type="text" name="nombre" placeholder="Name"/>
    <input type="email" name="email" placeholder="Emai"/>
    <input type="submit" value="Enviar"/>
</form>