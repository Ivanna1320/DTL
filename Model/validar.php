<?php
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['usuario'] = $usuario;

    include('db.php');

    $consulta = "SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    //Codigo sin ROLES
    /*
    $filas = mysqli_num_rows($resultado);

    if($filas) {
        header("location:../Views/Admin/ViewAdmin.php");
    }else{
        ?>
        <?php
        include("../Views/ViewLogin.php");
        ?>
        <h1>HAY UN ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }*/

    //Codigo con ROLES
    $filas = mysqli_fetch_array($resultado);

    if($filas['id_cargo']==1) { //Administrador
        header("location:../Views/Admin/ViewAdmin.php");
    }else if($filas['id_cargo']==2) { //Trabajador
        header("location:../Views/User/ViewUser.html");
    }
    else{
        ?>
        <?php
        include("../Views/ViewLogin.php");
        ?>
        <h1>HAY UN ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }


    mysqli_free_result($resultado);
    mysqli_close($conexion);