@extends('templates.administrador')

@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador" class="breadcrumb left">Panel administrador</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Panel administrador</b></h5>
		</div>
	</div>
@stop
@section('content')
<div class="row">
	<div class="col s12 m6 l6">
		<a href="/registrar-mascotas" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3 class="color-item"><b><i class=""></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong class="color-item">Registrar mascotas</strong>
						</h5>
						
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/logout" class="item">
			<div class="card-panel red darken-4">
				<div class="row">
					<div class="col s2">
						

					</div>
					<div class="col s10">
						<h5>
							<strong>Salir</strong>
						</h5>
					
					</div>
				</div>
			</div>
		</a>
	</div>
	

@stop