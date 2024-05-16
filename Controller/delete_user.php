<?php
include('../Model/db.php');
$con = Conexion();

$id=$_GET['id'];

$sql = "DELETE FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query) {
    header("Location: ../Views/Admin/ViewAdmin.php");
};
?>