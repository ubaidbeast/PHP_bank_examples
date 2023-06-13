<?php 

    include_once('./templates/database_connection.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($database_connection->query($sql) === true) {
        header("location: login.php");
    } else {
        echo 'error';
    }

?>