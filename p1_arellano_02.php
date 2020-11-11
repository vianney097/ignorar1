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
				<h3>Problema 1 de Hatziry Arellano</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/Ejercicio01.jpg" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "p5_arellano_02_php/Ejercicio1.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<p>
					
						Este codigo se trato principalmente de ver <br>
						los resultados acerca de los tipos de datos de una variable <br>
						como lo es el is_boolean <br>
						Este lo que hace es que solo almacena <br>
						dos valores los cuales son verdadero <br>
						o falso.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>