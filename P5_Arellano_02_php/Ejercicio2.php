<?php

	$aDias = array("MARIA", "JUAN", "PEDRO", "ISABEL", "PEPE", "FERNANDO", "ROBERTO");
	$contador;
	$posicion = -1;

	for( $contador=0; $contador < count($aDias); $contador++ )
	{
		if( $aDias[$contador] == "PEPE") {
			$encontrado = $contador;
			break;
		}
	}

	if( $encontrado == -1 )
		echo "No se ha encontrado el nombre";
	else
		echo "PEPE est� en la posici�n [".$encontrado."]";

?>
