<!--Ventana donde se muestran los servicios: Ivanna-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="resources/scss/styles.css" rel="stylesheet" >
</head>
<body>
    <!--Navbar-->
    <?php
        include('navbar.php');
    ?>
    <!--Fin Navbar-->

    <h5>Servicios</h5>

    <div class="container text-center bg-secondary mt-5">
        <div class="row">
            <!--Inicio Menu lateral-->
            <?php
                require_once('sidebar.php');
            ?>
            <!--Fin Menu lateral-->

            <!--Inicio Cards-->
            <div class="col-md flex-content">

                <div class="d-flex flex-content flex-wrap justify-content-center">

                    <div class="card flex-item m-4" style="width: 22rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card flex-item m-4" style="width: 22rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card flex-item m-4" style="width: 22rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card flex-item m-4" style="width: 22rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
            <!--Fin Cards-->
            
        </div>
    </div>



    <!--Inicio Footer-->
    <?php
      include('footer.php');
    ?>
    <!--Fin Footer-->
</body>
</html>