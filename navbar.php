<!--Navbar: Ivanna-->
<nav class="navbar navbar-expand-lg bg-primary">
      <div class="container-fluid m-2">
        <a class="navbar-brand text-light fw-bold" href="index.php"> 
        <img src="resources/img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          DTL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="ViewServicios.php">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="ViewEmpleos.php">Empleos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="ViewNosotros.php">Nosotros</a>
            </li>
        </ul>



          <!-- <div class="d-flex" role="text">
            <a type="button" class="btn btn-light" href="Views/ViewLogin.php">
                Iniciar 
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
            </a>
          </div> -->
        </div>
      </div>


    <!-- Agrega este código al final de tu archivo HTML -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
        include('Views/ViewLogin.php');
      ?>
        <form action="#">
            <!-- Tu formulario actual -->
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        Puedes agregar un botón de enviar dentro del modal si lo necesitas -->
      <!-- </div> -->
    </div>
  </div>
</div>

<!-- Modifica el botón "Iniciar" -->
<div class="d-flex" role="text">
    <!-- Cambia el enlace por un botón que abra el modal -->
    <button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#loginModal">
        Iniciar
    </button>
</div>
</nav>