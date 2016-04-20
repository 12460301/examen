@extends('templates.website')
@section('content')
<section class="container">
	<form class="col s12" action="/registrarmascotas" method="POST">
	{{ csrf_field() }}
	<h2>Registro de mascotas</h2>
		<div class="card-panel form-acceso">
			<label>Ingresa de mascota</label>
			<input id="nombre" name="nombre" type="text" class="validate" required />
			<label>Edad</label>
			<input id="edad" name="edad" type="text" class="validate" required />
			<label>Tipo</label>
			<input id="tipo" name="tipo" type="text" class="validate" required />
			<label>Color</label>
			<input id="color" name="color" type="text" class="validate" required />
		<div class="center">
		<button type="submit" class="waves-effect waves-light btn right cyan darken-3"> Registrar</button>
	<br>
	<br>
		<a href="/administrador" class="waves-effect waves-light btn right cyan darken-3">Regresar</a>
	
		</div>
 </div>

	</form>

</section>





@stop