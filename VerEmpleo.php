<?php
include('Model/db.php');
$con = Conexion();

$id = $_GET['id']; // Obtener el ID de la URL

$sql = "SELECT * FROM empleos WHERE id='$id'"; // Consulta para seleccionar todos los servicios
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleo </title>
    <link href="resources/scss/styles.css" rel="stylesheet" >
</head>
<body>
    <!--Navbar-->
    <?php
        include('navbar.php');
    ?>
    <!--Fin Navbar-->
    

    <div class="container bg-light rounded mt-5 p-5 w-50 ">
        <div class="row justify-content-center">
            <?php
            if (!$query) {
                echo "Error al ejecutar la consulta: " . mysqli_error($con);
            } else {
            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_array($query)
            ?>
            <input type="hidden" name="id" value="<?= $row['id'] ?>" >
            <div class="text-center" >
                <h1 class="text-blackfw-bold"><?= $row['titulo'] ?></h1>
                <img src="<?= $row['img'] ?>" class="card-img-top mt-4" style="height: 230px; width: 400px" alt="...">
                <h4 class="mt-1" style="font-family: 'Montserrat', sans-serif;">Se parte de nuestro equipo!!!</h1>
            </div>
            <div class="mt-3">
                <p class="card-text"><?= $row['descripcion'] ?></p>
                <p class="card-text"><b>Responsabilidades Principales:</b> </p>
                <p class="card-text"><?= $row['especificacion'] ?></p>
                <p class="card-text"><b>Experiencia:</b> </p>
                <p class="card-text"><?= $row['experiencia'] ?></p>
                <p class="card-text"><b>Habilidades Técnicas:</b> </p>
                <p class="card-text"><?= $row['htecnicas'] ?></p>
                <p class="card-text"><b>Habilidades Interpersonales:</b> </p>
                <p class="card-text"><?= $row['hpersonales'] ?></p>
                <p class="card-text"><b>Competencias Adicionales:</b> </p>
                <p class="card-text"><?= $row['competencias'] ?></p>
                <p class="card-text"><b>Importante:</b> </p>
                <p class="card-text text-justify"><?= $row['importante'] ?></p>
            </div>
            <div class="text-center mt-4" >
                <a href="#" class="btn btn-primary">Contactar</a>
            </div>
            <?php

            } else {
                echo "No se encuentra el servicio.";
                }
                }

            mysqli_close($con);
            ?>

            
            <div>

            </div>
            
            
        </div>
    </div>

    <!--Inicio Footer-->
    <?php
        include('footer.php');
    ?>
    <!--Fin Footer-->

</body>
</html>