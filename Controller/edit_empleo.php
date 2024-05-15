<?php
include('../Model/db.php');
$con = Conexion();

$id = $_POST['id'];
$tituloEmp = $_POST['titulo'];
$descEmp = $_POST['descripcion'];
$EspEmp = $_POST['especificacion'];
$descImpEmp = $_POST['importante'];

// Verificar si se cargó una nueva imagen
if ($_FILES['selImg']['size'] > 0) {
    // Subir la nueva imagen al servidor
    $directorioSubida = '../Views/Admin/img/empleos/'; // Ruta donde se almacenarán las imágenes en el servidor
    $nombreArchivo = $_FILES['selImg']['name'];
    $rutaArchivo = $directorioSubida . $nombreArchivo;

    if (move_uploaded_file($_FILES['selImg']['tmp_name'], $rutaArchivo)) {
        // Si la imagen se subió correctamente, actualizar la ruta en la base de datos
        $sql = "UPDATE empleos SET id=$id, titulo='$tituloEmp', descripcion='$descEmp', especificacion='$EspEmp', importante='$descImpEmp', img='$rutaArchivo' WHERE id='$id'";
        $query = mysqli_query($con, $sql);

        if ($query) {
            header("Location: ../Views/Admin/TabEmpleos.php");
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($con);
        }
    } else {
        echo "Error al actualizar la imagen al servidor.";
    }
} else {
    // Si no se cargó una nueva imagen, actualizar solo los otros campos en la base de datos
    $sql = "UPDATE empleos SET id=$id, titulo='$tituloEmp', descripcion='$descEmp', importante='$descImpEmp' WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../Views/Admin/TabEmpleos.php");
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
