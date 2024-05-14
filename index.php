<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DTL</title>
        <link href="resources/scss/styles.css" rel="stylesheet" >
        
    
    </head>
  <body>
    <!--Navbar-->
      <?php
        require_once('navbar.php');
      ?>
    <!--Fin Navbar-->

    
    <div class="text-center" >
      <h1 class="text-primary mt-5 fw-bold">Bienvenidos a DTL</h1>
    </div>

    <div class="container bg-light rounded text-center mt-5">
    <div class="">
        <!--Inicio Menu lateral-->
        <!-- <?php
          // require_once('sidebar.php');
        // ?> -->
        <!--Fin Menu lateral-->

        <div class="col-md">
            <div class="row align-items-center">
                <div class="col-md ">
                    <p class="text-justify">
                        La empresa aduanal DTL se destaca por su excelencia en el ámbito de los servicios 
                        aduaneros. Con una vasta experiencia en el sector, DTL se especializa en facilitar 
                        el comercio internacional al ofrecer soluciones integrales y personalizadas para 
                        importadores y exportadores. Desde el despacho aduanero hasta la gestión de trámites 
                        y documentación, DTL se compromete a brindar un servicio eficiente, confiable y 
                        transparente. Su equipo altamente capacitado y su enfoque centrado en el cliente 
                        hacen de DTL la opción ideal para empresas que buscan optimizar sus operaciones 
                        comerciales a nivel internacional.
                    </p>
                </div>

                <div class="col-md">
                    <figure class="figure">
                        <img src="resources/img/presentacion.jpg" class="figure-img img-fluid rounded" style="width: 100%;" alt="...">
                        <figcaption class="figure-caption fs-5"><em>"DTL: Conectando destinos, entregando sueños."</em></figcaption>
                    </figure>
                </div>
            </div>


            <div class="list-group list-group-flush border-bottom scrollarea" >
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1 text-center w-100">Misión</strong>
                    </div>
                    <div class="col-10 mb-1 small text-center w-100 fs-5">
                        Ser la empresa líder en servicios aduaneros, reconocida por su excelencia 
                        operativa, innovación continua y compromiso con la satisfacción del cliente.
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1 text-center w-100">Visión</strong>
                    </div>
                    <div class="col-10 mb-1 small text-center w-100 fs-5">Proporcionar servicios aduaneros 
                        de calidad superior, asegurando el cumplimiento de las regulaciones 
                        internacionales y ofreciendo soluciones integrales que impulsen el éxito de 
                        nuestros clientes en el comercio internacional.
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 align-items-center justify-content-between" >
                        <strong class="mb-1 text-center w-100">Valores</strong>
                    </div>
                    <div class="col-10 mb-1 small text-center w-100 fs-5">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
            </div>
            
        </div>
    </div>
</div>



    <!--Inicio Footer-->
    <?php
      require_once('footer.php');
    ?>
    <!--Fin Footer-->

    <script src="resources/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>