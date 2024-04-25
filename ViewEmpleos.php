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
                require_once('sidebar.php');
            ?>
            <!--Fin Menu lateral-->

            <!--Inicio Cards de servicios-->
            <div class="col-md ">
                
                <div class="row align-items-center mt-5">
                    <div class="container text-center ">
                        <div class="card mb-3 " style="height: auto;">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="#" class="btn btn-primary">Contactar</a>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-5">
                    <div class="container text-center ">
                        <div class="card mb-3 " style="height: auto;">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="#" class="btn btn-primary">Contactar</a>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-5">
                    <div class="container text-center ">
                        <div class="card mb-3 " style="height: auto;">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="#" class="btn btn-primary">Contactar</a>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
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