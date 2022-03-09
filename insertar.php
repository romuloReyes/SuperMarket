<?php

include("conexion.php");
$con=conectar();


// $id=$_POST['id'];
// $nombre=$_POST['nombre'];
// $precio=$_POST['precio'];
// $stock=$_POST['stock'];
// $descripcion=$_POST['descripcion'];
// $imagen=$_POST['imagen'];

/**ARREGLO CON MENSAJES DE ERRORES **/
$errores=[];

if($_SERVER['REQUEST_METHOD']==='POST'){
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // exit;
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    // exit;

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $stock=$_POST['stock'];
    $descripcion=$_POST['descripcion'];
    // $imagen=$_POST['imagen'];

    $imagen=$_FILES['imagen'];
    $imagenNombre=$imagen['name'];
    

    if(!$id){
        $errores[]="Debes añadir un id";
    }
    if(!$nombre){
        $errores[]="Debes añadir un nombre";
    }
    if(!$precio){
        $errores[]="Debes añadir un precio";
    }
    if(!$stock){
        $errores[]="Debes añadir un stock";
    }
    if(!$descripcion){
        $errores[]="Debes añadir una descripcion";
    }
    if(!$imagen){
        $errores[]="Debes añadir una imagen";
    }
    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";
    // exit;
    /** REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO**/
    if(empty($errores)){
        /** SUBIDA DE ARCHIVOS **/
        $carpetaImagenes='imagenes';
        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }
        // /*SUBIR LA IMAGEN */
        move_uploaded_file($imagen['tmp_name'],$carpetaImagenes . "/archivo.jpg");

        $sql="INSERT INTO productos2 VALUES ('$id','$nombre','$precio','$stock','$descripcion','$imagenNombre')";
        $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: productos.php");
        }
    }else{
    }

}


// move_uploaded_file($imagen['imagen'], $carpetaImagenes . "/archivo.jpg");
// if($id && $nombre && $precio && $stock && $descripcion){
//     $sql="INSERT INTO productos2 VALUES ('$id','$nombre','$precio','$stock','$descripcion','$imagen')";
//     $query=mysqli_query($con,$sql);

//     if($query){
//         Header("Location: productos.php");
//     }else{
//     }
// }else{
//     Header("Location: productos.php");
// }



?>