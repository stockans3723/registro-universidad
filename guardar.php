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
  $otros=$_POST['Otros'];
  $consulta = "INSERT INTO usuarios(idUsuario,Nombre,Paterno,Materno,CodigoPostal,Calle,Colonia,Ciudad,Instituto,Promedio,TipoSangre,Discapacidad,Otros) VALUES('$usuario','$nombre','$paterno','$materno','$codigoPostal','$calle','$colonia','$ciudad','$instituto','$promedio','$tipoSangre','$discapacidad','$otros')";

  $registro=$_POST['idRegistro'];
  $nombre=$_POST['Nombre'];
  $paterno=$_POST['Paterno'];
  $materno=$_POST['Materno'];
  $instituto=$_POST['Instituto'];
  $universidad=$_POST['idUniversidad'];
  $carreras=$_POST['idCarreras'];
  $consulta = "INSERT INTO registro(idRegistro,Nombre,Paterno,Materno,Instituto,idUniversidad,idCarreras)VALUES('$registro','$nombre','$paterno','$materno','instituto$','$universidad','$carreras')";  
 
  
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