<?php 
// include_once("funciones.php");
include("header.php");
// En soporte.php se instancia $auth, $validador y $db

	$usuarioLogueado = $auth->usuarioLogueado($db);

	if ($usuarioLogueado == null) 
		{
			$nombre = "Invitado";
		} 
		else 
		{
			$nombre = $usuarioLogueado->getUsername();
			// donde esta?
		}
echo "Bienvendio $nombre";

?>

<h1>Breve referencia de lo que es el sitio</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis rerum autem, fugiat libero, quaerat laborum blanditiis atque illum! Repellendus sequi minima cupiditate. Rem id quis adipisci reprehenderit est, neque natus?</p>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nemo alias dignissimos dolor, ipsum modi cupiditate nostrum hic vitae porro. Magnam, modi cupiditate veniam, ea incidunt quo iusto veritatis sit!</p>

<div id="preguntas" class="container">
	<?php
	include_once ("preguntas.php");
	?>
</div>

<div id="footer" class="container"> 
	<?php 
	include_once ("footer.php");
	?>
</div>