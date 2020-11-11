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
				<h3>Problema 3 de Hatziry Arellano</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/Ejercicio3.jpg" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p5_arellano_02_php/Ejercicio3.php";
					?>
					<h4>P3 Explicacion del codigo</h4>
					<p>
						Aqui en este ejercicio pudimos ver los diferentes <br>
						tipos de variables y como estas se expresan tanto en <br>
						codigo como se presentan en la pantalla al usuario <br>
						dandonos una idea de que escenarios se podrian usar y <br>
						las diferentes funciones que se le pueden dar a cada una <br>
						de ellas.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>