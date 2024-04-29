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

    <div class="text-center" >
        <h1 class="text-primary mt-5 fw-bold">Bienvenidos a DTL</h1>
    </div>

    <div class="container text-center mt-5 bg-light">
        <div class="row align-items-center">
            <div class="col">
                <h3>¿Quiénes somos?</h3>
                <p class="fs-4">Descripcion</p>
            </div>
            <div class="col ">
                <img src="resources/img/logo.jpg" class="img-fluid rounded-start w-50 h-50" alt="...">
            </div>
        </div> 
        <div class="row align-items-center">
            <h1>Ubicación</h1>
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.1343207318596!2d-104.2994784740134!3d19.057831052541257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d58346417f0d%3A0x6a303bfbb7f41fe3!2sSan%20Pedrito%2C%20Deportiva%205%20de%20Mayo%2C%20Manzanillo%2C%20Col.!5e0!3m2!1ses!2smx!4v1714292312632!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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