<html>
<head>
	<title>Conexión a MySQL</title>
</head>
<body>
	<?php
	//phpinfo();

	$HOST="localhost";
	$USUARIO="root";
	$PWD="";
	$conexion=mysqli_connect($HOST, $USUARIO, $PWD);
	if(!$conexion)
	{
		die("No se ha podido conectar al servidor: ".mysqli_error());
	}
	else
	{
		//echo "Correctamente conectados a la base de datos MySQL.<br>";
	}
	// selecciona la base de datos
	$bd_seleccionada=mysqli_select_db($conexion,"mydb");
	if(!$bd_seleccionada)
	{
		die("No hemos podido seleccionar la base de datos.".mysqli_error());
	}
	else
	{
		//echo "Base de datos correctamente seleccionada.";
	}
	?>
</body>
</html>