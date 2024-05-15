<?php
//Seguridad de sesiones en la paginacion

session_start();
//error_reporting(0);
// Verifica si la clave "usuario" está definida en el array $_SESSION
if(isset($_SESSION['usuario'])) {
  // Si está definida, accede a su valor
  $usuario = $_SESSION['usuario'];
  //echo "Bienvenido, $usuario";
} else {
  // Si no está definida, muestra un mensaje de error o toma otra acción adecuada
  echo "No se ha iniciado sesión";
  die();
}

include('../../Model/db.php');
$con = Conexion();

$sql = "SELECT*FROM empleos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head><script src="../../resources/libs/bootstrap/site/static/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleos</title>
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Empleos agregados</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group me-2">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="AddEmpleo.php" style="text-decoration: none;">
                            Empleo
                            <svg class="bi" style="width: 1em; height: 1em;"><use xlink:href="#file-earmark"/></svg>
                        </a>
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="#" style="text-decoration: none;">
                            Exportar 
                        </a>
                      </div>
                      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                        <svg class="bi" style="width: 1em; height: 1em;"><use xlink:href="#calendar3"/></svg>
                        This week
                      </button>
                    </div>
                </div>

                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Titulo</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Importante</th>
                          <th scope="col">Imagen</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                          <td><?= $row['id'] ?> </td>
                          <td><?= $row['titulo'] ?></td>
                          <td><?= substr($row['descripcion'], 0, 110) ?>...</td>
                          <td><?= $row['importante'] ?></td>
                          <td><?= $row['img'] ?></td>
                          <td><?= $row['fecha'] ?></td>
                          <td>
                            <!--Editar-->
                            <a href="editEmpleo.php?id=<?= $row['id'] ?>" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                            <!--Eliminar-->
                            <a href="../../Controller/delete_empleo.php?id=<?= $row['id'] ?>" class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                </svg>
                            </a>
                          </td>
                        </tr>
                        <?php endwhile; ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
            </main>
            <!--Termina main-->
        </div>
    </div>
    

    <script src="../../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../../resources/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>      
    <script src="../../resources/libs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>