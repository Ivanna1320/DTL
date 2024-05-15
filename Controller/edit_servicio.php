<?php
include('../Model/db.php');
$con = Conexion();

$id = $_POST['id'];
$tituloServ = $_POST['titulo'];
$descServ = $_POST['descripcion'];
$EspServ = $_POST['especificacion'];
$descImpServ = $_POST['importante'];

// Verificar si se cargó una nueva imagen
if ($_FILES['selImg']['size'] > 0) {
    // Subir la nueva imagen al servidor
    $directorioSubida = '../Views/Admin/img/servicios/'; // Ruta donde se almacenarán las imágenes en el servidor
    $nombreArchivo = $_FILES['selImg']['name'];
    $rutaArchivo = $directorioSubida . $nombreArchivo;

    if (move_uploaded_file($_FILES['selImg']['tmp_name'], $rutaArchivo)) {
        // Si la imagen se subió correctamente, actualizar la ruta en la base de datos
        $sql = "UPDATE servicios SET id=$id, titulo='$tituloServ', descripcion='$descServ', especificacion='$EspServ', importante='$descImpServ', img='$rutaArchivo' WHERE id='$id'";
        $query = mysqli_query($con, $sql);

        if ($query) {
            header("Location: ../Views/Admin/Servicios.php");
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($con);
        }
    } else {
        echo "Error al actualizar la imagen al servidor.";
    }
} else {
    // Si no se cargó una nueva imagen, actualizar solo los otros campos en la base de datos
    $sql = "UPDATE servicios SET id=$id, titulo='$tituloServ', descripcion='$descServ', importante='$descImpServ' WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../Views/Admin/Servicios.php");
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
