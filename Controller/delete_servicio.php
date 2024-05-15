<?php
include('../Model/db.php');
$con = Conexion();

$id=$_GET['id'];

$sql = "DELETE FROM servicios WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query) {
    header("Location: ../Views/Admin/Servicios.php");
};
?>