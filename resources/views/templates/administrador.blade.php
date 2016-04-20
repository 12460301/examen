<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title href="#!">{{ session()->get('administrador')->nombre }}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/panel.css"/>
</head>
<body>
	<header>
		<?php $route = Route::current()->uri(); ?>
		<nav class="cyan darken-3">
			<div class="container">
				<div class="nav-wrapper">
			    	
			    	<!--resoluciones PC-->
			      	<ul id="nav-mobile" class="right hide-on-med-and-down">
			      		<li><a href="#!">{{ session()->get('administrador')->nombre }}</a></li>
			        	
			      	</ul>
					<!--Resoluciones Tabletas y Telefonos-->
					<ul class="side-nav" id="mobile-demo">
			        	<li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i><i class="fa fa-user"></i></a></li>
				    </ul>
			    </div>
			</div>
		</nav>
	</header>
	<div class="container">
			@yield('navegacion')
		@yield('content')
	</div>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>