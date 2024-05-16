<?php
include('../../Model/db.php');
$con = Conexion();

$id=$_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

// Consulta para obtener el nombre del cargo basado en el ID
$id_cargo = $row['id_cargo'];
$sql_cargo = "SELECT descripcion FROM cargo WHERE id = $id_cargo";
$query_cargo = mysqli_query($con, $sql_cargo);
$row_cargo = mysqli_fetch_assoc($query_cargo);
$cargo_nombre = $row_cargo['descripcion'];

?>

<!DOCTYPE html>
<html lang="en">
<head><script src="../../resources/libs/bootstrap/site/static/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>

    <link href="../../resources/scss/styles.css" rel="stylesheet" >
    <link href="../../resources/styles/style.css" rel="stylesheet" >
</head>
<body>
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Editar Usuario</h2>
            <form action="../../Controller/edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>" >
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="administrador" <?= ($row['id_cargo'] == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="inlineRadio1">Administrador</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="trabajador" <?= ($row['id_cargo'] == 2) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="inlineRadio2">Trabajador</label>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $row['nombre'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" value="<?= $row['edad'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" value="<?= $row['celular'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="departamento" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="departamento" name="departamento" value="<?= $row['departamento'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $row['usuario'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="password" name="pass" value="<?= $row['pass'] ?>" required>
                </div>
                <div class="row justify-content-center w-auto">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>