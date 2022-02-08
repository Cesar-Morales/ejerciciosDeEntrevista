<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id = $id";
        $result_usuario = mysqli_query($conn, $query);

        if(!$result_usuario){
            die("Query Failed.");
        }

        $_SESSION['message'] = 'Eliminado exitosamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>