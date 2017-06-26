<?php 
echo "Esto es PHP";
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Comunidad Deportiva </title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style_mov.css">
		<link rel="stylesheet" type="text/css" href="css/style_tab.css">
		<link rel="stylesheet" type="text/css" href="css/style_des.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
	</head>
	<body>
	<div class="arriba">
		<a href="#index"><img src="images/flechaArriba.jpg" alt="flecha"></a>	
	</div>
	<div class="container">

		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">


			<nav class="main-nav">
				<ul>
					<li><a href="#index">Inicio</a></li>
					<li><a href="#registro">Registro</a></li>
					<li><a href="#ingreso">Ingreso</a></li>
					<li><a href="#preguntas">Frecuentes</a></li>
				</ul>
			</nav>

		</header>



		<main class="principal">
			<article class="articulo-inicio" id="index">
				<h2>Presentamos la idea del sitio!!!!!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
			</article>

			<article class="principal-registro" id="registro">
			<h2>Registro</h2>
			<h3>Ingrese todos sus datos</h3>

			<form action="">
			<div class="formulario">
				Nombre: <input type="text" name="nombre"><br><br>
			</div>
			<div class="formulario">
				Apellido: <input type="text" name="apellido"><br><br>
			</div>
			<div class="formulario">
				Dirección: <input type="text" name="direccion"><br><br>
			</div>
			<div class="formulario">
				eMail: <input type="email" name="mail"><br><br>
			</div>
			<div class="formulario">
				Deporte: <input type="text" name="deporte"><br><br>
			</div>
			<div class="formulario">
				Cumpleaños: <input type="date" name="nacimiento"><br><br>
			</div>
			<div class="formulario">
				<input type="submit" name="enviar">
			</div>

			</form>
			</article>	

			<article class="principal-ingreso" id="ingreso">
			<h2>Ingreso al sitio</h2>
			<h3>Ingrese Usuario y clave</h3>
				<form action="">
				<div class="formulario">
					Usuario: <input type="text" name="nombre"><br><br>
				</div>
				<div class="formulario">	
					Password: <input type="password" name="password"><br><br>
				</div>
				<div class="formulario">	
					<input type="submit" name="enviar">
				</div>	
				</form>
			</article>
			
			<article class="principal-preguntas" id="preguntas">
			<h2>Preguntas Frecuentes</h2>
			<div class="preguntas">
				<ul>
					<li><h4>¿Cuánto tiempo antes del viaje puedo hacer mi reserva?</h4><p>A través de aerolineas.com podés reservar y emitir desde 24 horas antes del vuelo hasta 11 meses en adelante para todos los países excepto en el caso de Perú donde podrás reservar desde 72 hs antes a la salida del vuelo hasta 11 meses en adelante.</p></li>
					<li><h4>¿En qué momento de la reserva debo ingresar mi número de Socio Aerolíneas Plus? </h4><p>Debés hacerlo al momento de ingresar tus datos. Recordá que es la única oportunidad que tendrás de ingresarlo y que el mismo es necesario al momento de hacer el Web Check In para que puedas sumar millas en tu Cuenta Plus.</p></li>
					<li><h4>¿Con qué medios de pago puedo abonar mi reserva on-line?</h4><p>La forma de pago aceptada en todos los sitios Web es tarjeta de crédito. En el caso de Argentina además podrá abonar a través de Pago Fácil, Pago Mis Cuentas, Cabal 24 y MasterCard Debit Card. Y Tarjetas de Crédito Argencard, American Express, Cabal, Diners, Cencosud, MasterCard, Nativa, Naranja, Nevada y Visa. </p></li>
					<li><h4>¿Puedo abonar en cuotas mi pasaje con tarjeta de crédito? </h4><p>Las compras efectuadas en los sitos para Argentina, Brasil y Chile se pueden pagar en cuotas con tarjetas locales. El resto de los sitios no permiten la financiación de las compras.</p></li>
					<li><h4>¿Este servicio es para todo el país? </h4><p>Podés comprar desde cualquier lugar del país pero, (por el momento) las entregas se realizan solo en CAP FED Y GBA.</p></li>
				</ul>
			</div>	
			</article>

		</main>

		<footer class="main_footer">
		<!--Dividimos el footer en tres partes-->
			<div class="div_footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
			<div class="div_footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
			<div class="div_footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
		</footer>
	</div>

	</body>
</html>
