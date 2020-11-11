<?php

	$cadena1 = "Curso de PHP - en este curso de PHP aprenderemos a programar en php";
	$reemplazos1 = 0;
	$reemplazos2 = 0;
	$reemplazos3 = 0;
	$reemplazos4 = 0;

	$cadena2 = str_replace( "php", "JavaScript", $cadena1, $reemplazos1 );
	$cadena3 = str_replace( array("php", "este"), "JavaScript", $cadena1, $reemplazos2 );
	$cadena4 = str_ireplace( "php", "JavaScript", $cadena1, $reemplazos3 );
	$cadena5 = str_ireplace( array("php", "este"), "JavaScript", $cadena1, $reemplazos4 );

	// Devuelve: "(1) reemplazos en : Curso de PHP - en este curso de PHP aprenderemos a programar en JavaScript"
	echo "(".$reemplazos1.") reemplazos en : ".$cadena2."<br />";

	// Devuelve: "(2) reemplazos en : Curso de PHP - en JavaScript curso de PHP aprenderemos a programar en JavaScript"
	echo "(".$reemplazos2.") reemplazos en : ".$cadena3."<br />";

	// Devuelve: "(3) reemplazos en : Curso de JavaScript - en este curso de JavaScript aprenderemos a programar en JavaScript"
	echo "(".$reemplazos3.") reemplazos en : ".$cadena4."<br />";

	// Devuelve: "(4) reemplazos en : Curso de JavaScript - en JavaScript curso de JavaScript aprenderemos a programar en JavaScript"
	echo "(".$reemplazos4.") reemplazos en : ".$cadena5."<br />";

?>