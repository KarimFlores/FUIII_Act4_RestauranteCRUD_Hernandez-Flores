<?php

include("conexion.php");
$con=conectar();

$IDEMPLEADO=$_GET['id'];

$sql="DELETE FROM empleado  WHERE IDEMPLEADO='$IDEMPLEADO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
