@extends('templates.website')

@section('content')
<section class="container">
	<form class="col s12" action="/registrar-usuario" method="POST">
	{{ csrf_field() }}
	<h2>Registro de usuarios</h2>
		<div class="card-panel form-acceso">
			<label>Ingresa el nombre</label>
			<input id="nombre" name="nombre" type="text" class="validate" required />
			<label>Ingresa el email</label>
			<input id="email" name="email" type="email" class="validate" required />
			<label>Ingresa la contrase;a</label>
			<input id="password" name="password" type="password" class="validate" required />
		<div class="center">
		<button type="submit" class="waves-effect waves-light btn right cyan darken-3"> Registrar</button>
	<br>
	<br>
		<a href="/" class="waves-effect waves-light btn right cyan darken-3">Regresar</a>
	
		</div>
 </div>

	</form>

</section>




@stop