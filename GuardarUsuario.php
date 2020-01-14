<?php
  //buffer de almacenamiento
  ob_start();
  require_once('Conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guardado de Solicitudes</title>
                                    

</head>
<body>
  <?php
  $usuario=$_POST['idUsuario'];
  $nombre=$_POST['Nombre'];
  $paterno=$_POST['Paterno'];
  $materno=$_POST['Materno'];
  $codigoPostal=$_POST['CodigoPostal'];
  $calle=$_POST['Calle'];
  $colonia=$_POST['Colonia'];
  $ciudad=$_POST['Ciudad'];
  $instituto=$_POST['Instituto'];
  $promedio=$_POST['Promedio'];  
  $tipoSangre=$_POST['TipoSangre'];
  $discapacidad=$_POST['Discapacidad'];
  $otro=$_POST['Otro'];
  $consulta = "INSERT INTO usuario(idUsuario, Nombre, Paterno, Materno, CodigoPostal, Calle, Colonia, Ciudad, Instituto, Promedio, TipoSangre, Discapacidad,Otro) VALUES ('$usuario', '$nombre', '$paterno', '$materno', '$codigoPostal', '$calle', '$colonia', '$ciudad', '$instituto', '$promedio','$tipoSangre', '$discapacidad','$otro')";

  
 
  
  if($resultado=mysqli_query($conexion,$consulta))
  {
    echo "La Solicitud se ha ingresado Correctamente";
  }
  else
  {
    echo "El registros Fallo, verifique la informacion ingresada".mysqli_error($conexion);
  }
  ?>

  

</body>
</html>
<?php
//5. Descontamos la base de datos
  mysqli_close($conexion);
  // Regresa el control a la pagina ListadoSucursales.php css, javascript
  print "<meta http-equiv=Refresh content=\"2 ; url=static.php\">";
?>