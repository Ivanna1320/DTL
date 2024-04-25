<!--Ventana donde se muestran la informacion de la empresa: Ivanna-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link href="resources/scss/styles.css" rel="stylesheet" >
</head>
<body>
    <!--Navbar-->
    <?php
        include('navbar.php');
    ?>
    <!--Fin Navbar-->

    <h5>Nosotros</h5>

    <div class="container text-center mt-5">
        <div class="row align-items-center">
            <div class="col">
                <h3>¿Quiénes somos?</h3>
                <p class="fs-4">Descripcion</p>
            </div>
            <div class="col">
                <img src="../resources/img/logo.jpg" class="img-fluid rounded-start w-50 h-50" alt="...">
            </div>
        </div>
    </div>

    <h5>Ubicación</h5>
    <p>Poner mapa</p>


    <!--Inicio Footer-->
    <?php
      include('footer.php');
    ?>
    <!--Fin Footer-->
</body>
</html>