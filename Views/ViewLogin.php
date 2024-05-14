<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link href="../resources/scss/styles.css" rel="stylesheet" >
    <link href="../resources/styles/style.css" rel="stylesheet"> -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JS de Bootstrap (requiere Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>
<body>


    <div class="container">

        <div class="content align-items-center">
            <div class="align-items-center justify-content-center h-90 g-0 px-4 px-sm-0">

                <div class="">

                    <!--Inicia Logo-->
                    <a href="#" class="d-flex justify-content-center mb-3">
                        <img src="resources/img/logo.jpg" alt="" width="60">
                    </a>
                    <!--Termina Logo-->

                    <div class="text-center mb-3">
                        <h3 class="fw-bold">Iniciar Sesión</h3>
                        <p class="text-secondary">Obten acceso a tu cuenta</p>
                    </div>

                    <!--Inicia Login con redes-->
                    <button class="btn btn-lg btn-outline-secondary btn-outline-custom w-100 mb-2" type="button">
                        <i class='bx bxl-google text-danger me-1 fs-6'></i> Iniciar con Google
                    </button>
                    <button class="btn btn-lg btn-outline-secondary btn-outline-custom w-100 mb-2">
                        <i class='bx bxl-facebook text-primary me-1 fs-6'></i> Iniciar con Facebook
                    </button>
                    <!--Termina Login con redes-->

                    <!--Inicia Divisor-->
                    <div class="position-relative">
                        <hr class="text-secondary divider">
                        <div class="divider-content-center"> or </div>
                    </div>
                    <!--Termina Divisor-->

                    <!--Inicia Formulario-->
                    <form action="../Model/validar.php" method="post">
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <i class='bx bx-envelope'></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <i class='bx bx-lock-alt'></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="input-group mb-2 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck1">
                                <label for="formCheck1" class="form-check-label text-secondary"><small>Recordar</small></label>
                            </div>
                            <div>
                                <small><a href="#">¿Olvidaste tu contraseña?</a></small>
                            </div>
                        </div>
                        <input type="submit" value="Ingresar" class="btn btn-primary btn-lg w-100 mb-2">
                        <!--
                        <a href="User/ViewUser.html" class="btn btn-primary btn-lg w-100 mb-2">Iniciar usuario</a>
                        <a href="Admin/ViewAdmin.html" class="btn btn-primary btn-lg w-100 mb-2">Iniciar admin</a>
                        -->
                    </form>
                    <!--Termina Formulario-->

                    <!-- <div class="text-center">
                        <small>¿No tienes una cuenta?<a href="Views/ViewRegister.php" class="fw-bold" data-bs-toggle="modal" data-bs-target="#registroModal"> Registrate</a></small>
                    </div> -->



                </div>

            </div>

        </div>

    </div>
    
</body>

</html>