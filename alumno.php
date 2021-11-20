<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EMPLEADOS:</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="IDEMPLEADO" placeholder="ID de Empleado">
                                    <input type="text" class="form-control mb-3" name="NOMBRES" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="APELLIDOS" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="TELEFONO" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="CORREO" placeholder="Correo electronico">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-3">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID De empleado</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Telefono celular</th>
                                        <th>Correo electronico</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDEMPLEADO']?></th>
                                                <th><?php  echo $row['NOMBRES']?></th>
                                                <th><?php  echo $row['APELLIDOS']?></th>
                                                <th><?php  echo $row['TELEFONO']?></th>    
                                                <th><?php  echo $row['CORREO']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['IDEMPLEADO'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDEMPLEADO'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>