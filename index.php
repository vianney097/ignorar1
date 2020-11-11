<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				
				<p>
				¿Qué es lo que hace la instrucion echo()? 
				 Muestra informacion de salida 
				</p>
				<h4>Conclusiones </h4>
				<p>
				Por lo que he podido ver este hace que <br>
				se muestre en la pantalla de la pagina web <br>
				las cosas que se encierran dentro de los parentesis<br>
				de esta, mostrando solamente lo que se ponga dentro de<br>
				ellos.
				</p>
				<figure>
					<img src="imagenes/hola1.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>¿Qué hace la sentencia IF…ELSE?
				 voy a investigar??
				</p>
				<h4>Conclusiones </h4>
				<p>
				Esta es para cumplir una condicion, es decir <br>
				por medio de una variable ya sea numerica o no <br>
				se compara con otra para saber si se cumple una condicion <br>
				si se cumple hace lo indicado dentro del if y si esta no se <br>
				cumple se hace lo indicado dentro de else.
				</p>
				<figure>
					<img src="imagenes/ifelse2.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				¿Como funciona el while? 
				  el while funciona para hacer ciclos
				 Explica el ciclo while?
				  por medio de una condicion y un contador<br>
				  se va a repetir cierta linea de codigo dentro <br>
				  de este hasta que la condicion ya no sea falsa <br>
				  si el contador no avanza dentro de la condicion <br>
				  se vuelve infinito.<br>
				</p>
				<h4>Conclusiones </h4>
				<p>
				para mi esta condicion sirve mucho cuando <br>
				queremos que el usuario de en si una <br>
				respuesta especifica y que se le repita esta <br>
				ejecusion o ventana de dialogo hasta que ponga lo <br>
				que queremos que salga.
				</p>
				<figure>
					<img src="imagenes/while.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>