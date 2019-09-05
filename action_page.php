<?php
//var_dump($_GET)
	echo "Su nombre es ".$_GET["nombre"];
	
	//fwrite($archivo, $_GET["nombre"]."\n");
	//var_dump(json_encode($MiObjeto));
	$MiObjeto = new stdClass();
	$MiObjeto ->nombre = "nombre";
	$MiObjeto ->apellido = "apellido";

	$archivo=fopen("usuarios.txt","a");
	fwrite($archivo, json_encode($MiObjeto));
	fclose($archivo);
	
	

	

	//var_dump($MiObjeto);
	


?>





