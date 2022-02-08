<?php 

include("db.php");

if(isset($_POST['salvar-usuario'])){

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $rol = $_POST['rol'];
    $genero = $_POST['gender'];
    $id = rand(5000, 150000);


    $query = "INSERT INTO `usuarios` (`ID`, `NOMBRE`, `EDAD`, `SEXO`, `ROLID`) VALUES ('$id', '$nombre', '$edad', '$genero', '$rol');";

    $result = mysqli_query($conn, $query);
    
    if(!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Usuario guardado con éxito';
    $_SESSION['message_type'] = 'success';
    
    header("Location: index.php");

}

?>