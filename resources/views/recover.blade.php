@extends('partials.base')

@section('title','Recuperar cuenta')

@section('body')
<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.png');">
		<div class="container">
			<div class="text-center">
				<h1>Recuperación de Clave</h1>
			</div>
		</div>
	</section>
	<section id="register">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="register-content">
						<h2><i>Beneficios de ser usuario de</i></h2>
						<h1>bio mercados</h1>
						<ul class="items">
							<li>Tendrás acceso a nuestra tienda virtual y nuestras aplicaciones móviles con una sola cuenta.</li>
							<li>Obtendrás grandes descuentos, promociones y más en los precios de nuestros productos y cambios bio.</li>
							<li>Podrás realizar una compra sin salir de tu hogar y recibir los productos en la puerta de tu casa u oficina.</li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<recover :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></recover>
				</div>
			</div>
		</div>
	</section>
@stop