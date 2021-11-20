<?php
include("conexion.php");
$con=conectar();

$IDEMPLEADO=$_POST['IDEMPLEADO'];
$NOMBRES=$_POST['NOMBRES'];
$APELLIDOS=$_POST['APELLIDOS'];
$TELEFONO=$_POST['TELEFONO'];
$CORREO=$_POST['CORREO'];

$sql="INSERT INTO empleado VALUES('$IDEMPLEADO','$NOMBRES','$APELLIDOS','$TELEFONO','$CORREO')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>