<?php
include('../Model/db.php');
$con = Conexion();

$id = null;
$tituloServ = $_POST['titulo'];
$descServ = $_POST['descripcion'];
$EspServ = $_POST['especificacion'];
$descImpServ = $_POST['importante'];
//$imgServ = addslashes(file_get_contents($_FILES['selImg']['tmp_name']));

// Subir la imagen al servidor
$directorioSubida = '../Views/Admin/img/servicios/'; // Ruta donde se almacenarán las imágenes en el servidor
$nombreArchivo = $_FILES['selImg']['name'];
$rutaArchivo = $directorioSubida . $nombreArchivo;

//$sql = "INSERT INTO servicios (id, titulo, descripcion, importante, img) VALUES ('$id','$tituloServ','$descServ','$descImpServ','$imgServ')";
//$query = mysqli_query($con, $sql);

if (move_uploaded_file($_FILES['selImg']['tmp_name'], $rutaArchivo)) {
    // Si la imagen se subió correctamente, guardar la ruta en la base de datos
    $sql = "INSERT INTO servicios (id, titulo, descripcion, especificacion, importante, img) VALUES ('$id', '$tituloServ', '$descServ', '$EspServ', '$descImpServ', '$rutaArchivo')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../Views/Admin/TabServicios.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($con);
    }
} else {
    echo "Error al subir la imagen al servidor.";
}
/*
if($query){
    header("Location: ../Views/Admin/Servicios.php");
} else {
    echo "Error al insertar datos: " . mysqli_error($con);
}*/

mysqli_close($con);
?>
