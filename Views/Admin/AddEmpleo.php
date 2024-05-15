<!DOCTYPE html>
<html lang="en">
<head><script src="../../resources/libs/bootstrap/site/static/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleo</title>

    <link href="../../resources/scss/styles.css" rel="stylesheet" >
    <link href="../../resources/styles/style.css" rel="stylesheet" >
</head>
<body>
    
    <!--Inicia iconos-->
    <?php
        require_once('iconos.php')
    ?>
    <!--Termina iconos-->

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
                
                <h2>Crear empleo</h2>
                <p>Puede agregar empleos</p>

                <!--Inicia Formulario-->

                <hr class="my-4">

                <div class="col-md-9 col-lg-8">
                    <form class="needs-validation" action="../../Controller/insert_empleo.php" method="POST" enctype="multipart/form-data">
                        <div class="col-sm mt-4">
                            <label for="firstName" class="form-label">Titulo *</label>
                            <input type="text" class="form-control" name="titulo" id="firstName" placeholder="Titulo del empleo" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Descripción *</label>
                            <textarea class="form-control" name="descripcion" placeholder="Descripción del empleo" id="floatingTextarea" required></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Responsabilidades Principales *</label>
                            <textarea class="form-control" name="especificacion" placeholder="Responsabilidades del solicitante" id="floatingTextarea" required></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Experiencia *</label>
                            <textarea class="form-control" name="experiencia" placeholder="Experiencia del solicitante" id="floatingTextarea" required></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Habilidades Técnicas *</label>
                            <textarea class="form-control" name="htecnicas" placeholder="Habilidades técnicas del solicitante" id="floatingTextarea" required></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Habilidades Interpersonales *</label>
                            <textarea class="form-control" name="hpersonales" placeholder="Habilidades blandas del solicitante" id="floatingTextarea" required></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="lastName" class="form-label">Competencias Adicionales*</label>
                            <textarea class="form-control" name="competencias" placeholder="Competencias del solicitante" id="floatingTextarea" required></textarea>                          
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="row g-3 mt-4">
                            <div class="col-12">
                                <label for="importante" class="form-label">Importante<span class="text-body-secondary">(Optional)</span></label>
                                <input type="text" class="form-control" id="importante" name="importante" placeholder="Notas importantes">
                            </div>
                        </div>

                        <div class="col-sm mt-4">
                            <label for="imagen" class="form-label">Imagen *</label>
                            <input type="file" class="form-control" id="selImg" name="selImg" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-50 btn btn-primary btn-lg m-3" type="submit">Publicar</button>
                    </form>
                </div>
                <!--Termina Formulario-->
                
            </main>
            <!--Termina main-->
        </div>
    </div>
    
    
</body>
</html>