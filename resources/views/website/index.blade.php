@extends('templates.website')

@section('content')
<h1>veterinaria blanca</h1>
	<div class="row">
	<div class="col s12 m6 l6">
		<a href="/registrar" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3 class="color-item"><b><i ></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong class="color-item">Registrar</strong>
						</h5>
						<h6 class="color-subitem"></h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/acceder" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i ></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Iniciar sesion</strong>
						</h5>
						
					</div>
				</div>
			</div>
		</a>
	</div>

	@stop