<?php
  //buffer de almacenamiento
  ob_start();
  require_once('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guardado de Solicitudes</title>
                                    

</head>
<body>
  <?php
  $usuarioG=$_POST['idUsuario'];
  $nombreG=$_POST['Nombre'];
  $paternoG=$_POST['Paterno'];
  $maternoG=$_POST['Materno'];
  $codigoPostalG=$_POST['CodigoPostal'];
  $calleG=$_POST['Calle'];
  $coloniaG=$_POST['Colonia'];
  $ciudadG=$_POST['Ciudad'];
  $institutoG=$_POST['Instituto'];
  $promedioG=$_POST['Promedio'];  
  $tipoSangreG=$_POST['TipoSangre'];
  $discapacidadG=$_POST['Discapacidad'];
  $otroG=$_POST['Otros'];
  $consulta ="INSERT INTO usuarios(idUsuario, Nombre, Paterno, Materno, CodigoPostal, Calle, Colonia, Ciudad, Instituto, Promedio, TipoSangre, Discapacidad,Otros)values(usuarioG, nombreG, paternoG, maternoG, codigoPostalG, calleG, coloniaG, ciudadG, institutoG, promedioG, tipoSangreG, discapacidadG, otroG)";


 
  
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
  print "< url=static.php\">";
?>