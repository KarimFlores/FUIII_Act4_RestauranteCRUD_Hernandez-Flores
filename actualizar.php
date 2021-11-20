<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE IDEMPLEADO='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="IDEMPLEADO" value="<?php echo $row['IDEMPLEADO']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="NOMBRES" placeholder="NOMBRES" value="<?php echo $row['NOMBRES']  ?>">
                                <input type="text" class="form-control mb-3" name="APELLIDOS" placeholder="APELLIDOS" value="<?php echo $row['APELLIDOS']  ?>">
                                <input type="text" class="form-control mb-3" name="TELEFONO" placeholder="TELEFONO" value="<?php echo $row['TELEFONO']  ?>">
                                <input type="text" class="form-control mb-3" name="CORREO" placeholder="CORREO" value="<?php echo $row['CORREO']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>