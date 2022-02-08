<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE id = $id";
    $result_usuario = mysqli_query($conn, $query);

    if (mysqli_num_rows($result_usuario) == 1) {
        $row = mysqli_fetch_array($result_usuario);
        $nombre = $row['NOMBRE'];
        $edad = $row['EDAD'];
        $rol = $row['ROLID'];
        $genero = $row['SEXO'];
    }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $rol = $_POST['rol'];
    $genero = $_POST['genero'];

    $query = "UPDATE `usuarios` SET NOMBRE = '$nombre', EDAD = '$edad', ROLID = '$rol', SEXO = '$genero' WHERE ID = $id";
    mysqli_query($conn, $query);


    $_SESSION['message'] = 'Usuario actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header("Location: index.php");
}
?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1 style="color:white; text-align: center;">Editar usuario</h1>
            <div class="card card-body bg-light">
                <form method='post' action="editar_usuario.php?id=<?php echo $_GET['id']; ?>">

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre" name="nombre" value="<?php echo $nombre; ?>" autofocus placeholder="Actualiza nombre">
                    </div>

                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control input-sm" id="edad" name="edad" value="<?php echo $edad; ?>" autofocus placeholder="Actualiza edad">
                    </div>

                    <div class="form-group">
                        <label for="roleID">RolID</label>
                        <input type="number" class="form-control input-sm" id="rol" name="rol" value="<?php echo $rol; ?>" autofocus placeholder="Actualiza rolID">
                    </div>

                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <input type="text" class="form-control input-sm" id="genero" name="genero" value="<?php echo $genero; ?>" autofocus placeholder="Actualiza genero">
                    </div>

                    <button class="btn btn-success btn-block" name="actualizar" type="submit">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>