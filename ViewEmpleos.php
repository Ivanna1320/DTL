<!--Ventana donde se muestran los empleos: Ivanna-->

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

    <h5>Empleos</h5>

    <!--Inicio Carrusel-->

    <!--Fin Carrusel-->


    <div class="container text-center bg-secondary mt-5">
        <div class="row">
            <!--Inicio Menu lateral-->
            <?php
                require_once('mLateral.php');
            ?>
            <!--Fin Menu lateral-->

            <div class="col-md ">

            <!--Ver flex para acomodar las card conforme se vayan agregando-->
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                        <div class="card-body">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Solicitar</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                        <div class="card-body">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Solicitar</a>
                        </div>
                        </div>
                    </div>
                </div>

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