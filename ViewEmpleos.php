<!--Ventana donde se muestran los empleos: Ivanna-->
<?php
include('Model/db.php');
$con = Conexion();

$sql = "SELECT * FROM empleos"; // Consulta para seleccionar todos los servicios
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleos</title>
    <link href="resources/scss/styles.css" rel="stylesheet" >
</head>
<body>
    <!--Navbar-->
    <?php
        include('navbar.php');
    ?>
    <!--Fin Navbar-->

    <div class="text-center" >
        <h1 class="text-primary mt-3 fw-bold">Empleos</h1>
    </div>

    <!--Inicio Carrusel-->

    <!--Fin Carrusel-->


    <div class="container text-center bg-light rounded  mt-5">
        <div class="row">
            <!--Inicio Menu lateral-->
            <!-- ?php -->
                <!-- require_once('sidebar.php'); -->
            <!--Fin Menu lateral-->

            <!--Inicio Cards de servicios-->
            <div class="col-md ">
            
                <div class="row align-items-center mt-3">

                    <div class="container text-center ">
                        <?php
                            if (!$query) {
                                echo "Error al ejecutar la consulta: " . mysqli_error($con);
                            } else {
                                if (mysqli_num_rows($query) > 0) {
                                    while ($row = mysqli_fetch_array($query)) {
                                        // Convertir la fecha de la base de datos a un objeto DateTime
                                        $fechaObjeto = new DateTime($row['fecha']);
        
                                        // Obtener la fecha y hora actual
                                        $fechaActual = new DateTime();
        
                                        // Calcular la diferencia entre la fecha y hora actual y la fecha y hora de la base de datos
                                        $diferencia = $fechaActual->diff($fechaObjeto);
                                        //var_dump($diferencia);
                                        // Formatear la diferencia para mostrarla de manera amigable
                                        if ($diferencia->h > 0 || $diferencia->i > 0) {
                                            // Si han pasado horas o minutos desde que se subieron los datos
                                            $tiempoTranscurrido = $diferencia->h . " horas y " . $diferencia->i . " minutos";
                                        } else {
                                            // Si han pasado menos de un minuto desde que se subieron los datos
                                            $tiempoTranscurrido = "Hace menos de un minuto";
                                        }
                        ?>
                        <div class="card mb-3 " style="height: auto;">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    <img src="<?= $row['img'] ?>" class="img-fluid rounded-start" style="width: 300px; height: 200px;" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['titulo'] ?></h5>
                                        <p class="card-text"><?= substr($row['descripcion'], 0, 110) ?>...</p>
                                        <a href="VerEmpleo.php?id=<?= $row['id'] ?>" class="btn btn-primary">Ver más</a>
                                        <p class="card-text"><small class="text-body-secondary"><?= $tiempoTranscurrido ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                            echo "No hay empleos disponibles.";
                            }
                        }

                    mysqli_close($con);
                    ?>
                    </div>

                </div>

            </div>
            <!--Fin Cards de servicios-->

        </div>
    </div>


    <!--Inicio Footer-->
    <?php
        include('footer.php');
    ?>
    <!--Fin Footer-->
</body>
</html>