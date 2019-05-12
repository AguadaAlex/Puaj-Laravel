<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require_once "controlador/vistaControlador.php";

		/*
			Instancia del controlador para realizar la tarea de
			obtención de vista.
		*/
		$vt = new vistaControlador();
		$vistaR = $vt->obtener_vista_controlador();

		/*
			If que controla el resultado, llamando al login.php o
			al archivo que corresponda en la parte del contenido 
			de la pág más abajo.
			Notar que el "else" está separado abajo, y hay una sentencia
			endif para avisar que termina la comprobación.
		*/
		if ($vistaR=="login"):
			require_once "vista/contenidos/login.php";
		else:
	?>


	<!-- Contenido de la página -->

	<?php 
		/*
			Se supone que la plantilla debe tener secciones como la
			barra superior y los botones ya colocados, y aca, en el contenido
			es donde va a cambiar lo que se muestra dependiendo de lo solicitado
			por el usuario
		*/
		require_once $vistaR; 
		endif;
	?>

</body>
</html>