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


  $registro=$_POST['idRegistro'];
  $nombre=$_POST['Nombre'];
  $paterno=$_POST['Paterno'];
  $materno=$_POST['Materno'];
  $instituto=$_POST['Instituto'];
  $universidad=$_POST['idUniversidad'];
  $carreras=$_POST['idCarreras'];
  $consulta = "INSERT INTO registro(idRegistro,Nombre,Paterno,Materno,Instituto,idUniversidad,idCarreras)VALUES('$registro','$nombre','$paterno','$materno','$instituto','$universidad','$carreras')";  
 
  
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