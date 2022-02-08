<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-5 p-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>

            <div id="form-user" class="card card-body bg-light">
                <form action="crear_usuario.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre" name="nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control input-sm" id="edad" name="edad">
                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol" class="form-control input-sm">
                            <option value="">Seleccione un rol</option>
                            <option value="1">Alumno</option>
                            <option value="2">Docente</option>
                            <option value="3">Director</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rol mt-1">Genero</label>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <div class="form-check">
                                <label class="btn">
                                    <input type="radio" name="gender" value="H" autocomplete="off"> Hombre
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="btn active">
                                    <input type="radio" name="gender" value="M" autocomplete="off"> Mujer
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group center-text"></div>
                    <input type="submit" class="btn btn-success" name="salvar-usuario" value="Guardar">
            </div>
            </form>
            <div class="mt-4 bg-white">
                <div id="chart">
                    <!--CODIGO JAVASCRIPT-->
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <table class="bg-warning table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Rol</th>
                        <th>Genero</th>
                        <th>Acciones</th>
                    </tr>
                <tbody class="bg-white">>
                    <?php
                    $query = "SELECT * FROM `usuarios` INNER JOIN roles ON roles.ROLID = usuarios.ROLID;";
                    $result_users = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_users)) {
                    ?>
                        <tr>
                            <td><?php echo $row['NOMBRE']; ?></td>
                            <td><?php echo $row['EDAD']; ?></td>
                            <td><?php echo $row['DESCRIPCION']; ?></td>
                            <td><?php echo $row['SEXO']; ?></td>
                            <td>
                                <a href="editar_usuario.php?id=<?php echo $row['ID']; ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminar_usuario.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </thead>
            </table>
        </div>

    </div>
</div>
</div>

<?php include("api/index.php"); ?>

<?php include("includes/footer.php"); ?>