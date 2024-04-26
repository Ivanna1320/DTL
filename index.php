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


    <div class="container text-center bg-secondary mt-5">
      <div class="row">
        <!--Inicio Menu lateral-->
        <?php
          require_once('sidebar.php');
        ?>
        <!--Fin Menu lateral-->

            <div class="col-md ">

              <div class="row align-items-center">
                <div class="col-md bg-primary">
                  Descripción
                </div>

                <div class="col-md bg-success">
                  <figure class="figure">
                    <img src="resources/img/presentacion.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption fs-5"><em>"DTL: Conectando destinos, entregando sueños."</em></figcaption>
                  </figure>
                </div>
              </div>

              <div class="row align-items-center mt-5">
                <figure class="text-center">
                  <blockquote class="blockquote">
                    <p>Misión</p>
                  </blockquote>
                  <figcaption class="blockquote-footer text-black">
                    Someone famous in
                  </figcaption>
                </figure>
              </div>

              <div class="row align-items-center mt-5">
                <figure class="text-center">
                  <blockquote class="blockquote">
                    <p>Visión</p>
                  </blockquote>
                  <figcaption class="blockquote-footer text-black">
                    Someone famous in
                  </figcaption>
                </figure>
              </div>

              <div class="row align-items-center mt-5">
                <figure class="text-center">
                  <blockquote class="blockquote">
                    <p>Valores</p>
                  </blockquote>
                  <figcaption class="blockquote-footer text-black">
                    Someone famous in
                  </figcaption>
                </figure>
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