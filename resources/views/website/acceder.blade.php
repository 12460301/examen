@extends('templates.website')
@section('content')


	<section class="container">
			<div class="row">
				<div class="col s12">
					<div class="card-panel form-acceso">
						@if(Session::has('error'))
							<p class="error">Usuario no encontrado</p>

						@endif
						<form class="col s12" action="/login" method="POST">
							{{ csrf_field() }}
							<div class="row">
								<div class="input-field col s12">
									<input id="email" type="email" class="validate" name="email">
									<label for="email">email</label>
								</div>


							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="password" type="password" class="validate" name="password">
									<label for="password">password</label>
								</div>
							</div>
							<div class="row">
								<a href="/" class="waves-effect waves-light btn right cyan darken-3">Regresar</a>
								
								<button type="submit" class="waves-effect waves-light btn"> Ingresar</button>
							</div>
							
							
						</form>
						


					</div>
					
				</div>

			</div>
	</section>
@stop
	