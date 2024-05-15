<?php
include('../Model/db.php');
$con = Conexion();

$id = null;
$tituloEmp = $_POST['titulo'];
$descEmp = $_POST['descripcion'];
$EspEmp = $_POST['especificacion'];
$ExpEmp = $_POST['experiencia'];
$HtecEmp = $_POST['htecnicas'];
$HperEmp = $_POST['hpersonales'];
$ComEmp = $_POST['competencias'];
$descImpEmp = $_POST['importante'];

// Subir la imagen al servidor
$directorioSubida = '../Views/Admin/img/empleos/'; // Ruta donde se almacenarán las imágenes en el servidor
$nombreArchivo = $_FILES['selImg']['name'];
$rutaArchivo = $directorioSubida . $nombreArchivo;

if (move_uploaded_file($_FILES['selImg']['tmp_name'], $rutaArchivo)) {
    // Si la imagen se subió correctamente, guardar la ruta en la base de datos
    $sql = "INSERT INTO empleos (id, titulo, descripcion, especificacion, experiencia, htecnicas, hpersonales, competencias, importante, img) 
            VALUES ('$id', '$tituloEmp', '$descEmp', '$EspEmp', '$ExpEmp', '$HtecEmp', '$HperEmp', '$ComEmp', '$descImpEmp', '$rutaArchivo')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../Views/Admin/TabEmpleos.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($con);
    }
} else {
    echo "Error al subir la imagen al servidor.";
}

mysqli_close($con);
?>
