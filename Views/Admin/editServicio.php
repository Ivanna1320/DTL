<?php
include('../../Model/db.php');
$con = Conexion();

$id=$_GET['id'];

$sql = "SELECT*FROM servicios WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head><script src="../../resources/libs/bootstrap/site/static/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar servicio</title>

    <link href="../../resources/scss/styles.css" rel="stylesheet" >
    <link href="../../resources/styles/style.css" rel="stylesheet" >
</head>
<body>
    
    <!--Inicia iconos-->
    <?php
        require_once('iconos.php')
    ?>
    <!--Termina iconos-->

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
          <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
              Light
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
              Dark
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
              Auto
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
        </ul>
    </div>

    <!--Inicia NavbarAdmin-->
    <?php
        require_once('navAdmin.php')
    ?>
    <!--Termina NavbarAdmin-->

    <div class="container-fluid">
        <div class="row">
            <!--Inicia Sidebar-->
            <?php
                require_once('sideAdmin.php')
            ?>
            <!--Termina Sidebar Admin-->
            
            <!--Inicia main-->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
                <!--Titulos-->
                
                <h2>Editar servicios</h2>
                <p>Puede editar el servicio</p>

                <!--Inicia Formulario-->

                <hr class="my-4">

                <div class="col-md-9 col-lg-8">
                    <form class="needs-validation" action="../../Controller/edit_servicio.php" method="POST" enctype="multipart/form-data">
                        <div class="col-sm mt-4">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>" >
                            <label for="firstName" class="form-label">Titulo</label>
                            <input type="text" class="form-control" name="titulo" id="firstName" placeholder="Titulo del servicio" value="<?= $row['titulo'] ?>" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Descripción</label>
                            <textarea class="form-control" name="descripcion" placeholder="Descripción del servicio" id="floatingTextarea" required><?= $row['descripcion'] ?></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Especificaciones</label>
                            <textarea class="form-control" name="especificacion" placeholder="Descripción de los detalles especificos" id="floatingTextarea" required><?= $row['especificacion'] ?></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="row g-3 mt-4">
                            <div class="col-12">
                                <label for="importante" class="form-label">Importante<span class="text-body-secondary">(Optional)</span></label>
                                <input type="text" class="form-control" id="importante" name="importante" value="<?= $row['importante'] ?>" placeholder="Notas importantes">
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="selImg" name="selImg" value="<?= $row['selImg'] ?>">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-50 btn btn-primary btn-lg m-3" type="submit">Editar</button>
                    </form>
                </div>
                <!--Termina Formulario-->
                
            </main>
            <!--Termina main-->
        </div>
    </div>
    
    
</body>
</html>