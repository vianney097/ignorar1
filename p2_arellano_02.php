<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Hatziry Arellano</h3>
				<article class="articulos">	
					<figure>
					<img src="imagenes/Ejercicio2.jpg" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_arellano_02_php/Ejercicio2.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						En este ejercicio podemos ver tanto de nuevo los <br>
						operadores logicos donde observamos dos nuevos, los <br>
						cuales son y asi como o, los cuales nos permiten que <br>
						se pongan varias condiciones a la vez, donde se deben de <br>
						cumplir todas o minimo una de las que se representa.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>