<?php 

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once 'templates/database_connection.php';

       $sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
       $result = $database_connection->query($sql);

       if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
       } else {
        echo "user not available";
       }
    }
    
?>