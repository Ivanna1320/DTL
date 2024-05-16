<?php
include('../Model/db.php');
$con = Conexion();

$id = null;
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$departamento = $_POST['departamento'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$cargo = $_POST['inlineRadioOptions'];

// Consulta para obtener el ID del cargo basado en la descripción
$sql_cargo = "SELECT id FROM cargo WHERE descripcion = '$cargo'";
$resultado_cargo = mysqli_query($con, $sql_cargo);

if ($resultado_cargo) {
    // Obtener el valor del cargo
    $fila_cargo = mysqli_fetch_assoc($resultado_cargo);
    $id_cargo = $fila_cargo['id'];

    // Insertar datos en la tabla usuarios
    $sql_insert = "INSERT INTO usuarios (id, nombre, edad, celular, departamento, usuario, pass, id_cargo) 
                   VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    //Preparar y ejecutar la consullta SQL
    $stmt = mysqli_prepare($con, $sql_insert);
    mysqli_stmt_bind_param($stmt, "issssssi", $id, $nombre, $edad, $celular, $departamento, $usuario, $pass, $id_cargo); //vincula los parámetros de la consulta
    $query = mysqli_stmt_execute($stmt); //devuelve TRUE o FALSE

    if ($query) {
        header("Location: ../Views/Admin/ViewAdmin.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($con);
    }
} else {
    echo "Error al obtener el ID del cargo: " . mysqli_error($con);
}

mysqli_close($con);
?>
