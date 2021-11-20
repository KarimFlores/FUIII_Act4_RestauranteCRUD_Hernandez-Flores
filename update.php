<?php

include("conexion.php");
$con=conectar();

$IDEMPLEADO=$_POST['IDEMPLEADO'];
$NOMBRES=$_POST['NOMBRES'];
$APELLIDOS=$_POST['APELLIDOS'];
$TELEFONO=$_POST['TELEFONO'];
$CORREO=$_POST['CORREO'];

$sql="UPDATE alumno SET  CORREO='$CORREO' NOMBRES='$NOMBRES',APELLIDOS='$APELLIDOS',TELEFONO='$TELEFONO' WHERE IDEMPLEADO='$IDEMPLEADO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>