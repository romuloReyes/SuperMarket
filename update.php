<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE productos2 SET  id='$id',nombre='$nombre',precio='$precio',stock='$stock',descripcion='$descripcion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productos.php");
    }
?>