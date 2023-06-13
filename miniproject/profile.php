<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>dashboard</title>
</head>
<body style="background-color: #eee;">
    <?php include_once 'dashboard-nav.php' ?>
    <?php 

                $isLoggedIn = $_SESSION['username'];

                include './templates/database_connection.php';
                $sql = "SELECT * FROM users WHERE username = '$isLoggedIn' ";
                $result = $database_connection->query($sql);
                $row = $result->fetch_assoc();

                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
                $id = $row['id'];
                //$_SESSION['id'] = $row['id'];


    ?>
   <div class="container p-5">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body p-3">
                    <div class="text-center">
                    <img src="images/Jesterbeast-logo.jpg" alt="avatar" class="rounded-circle mt-2 img-fluid" style="width: 150px;">
                    <h5 class="card-title mt-2"><?php echo $username; ?></h5>
                    <hr>
                    <p class="card-text mt-2">BIO : <span>when life gives you lemons make lemonade</span></p>
                    </div>
        
                    
                    <a href="delete.php" class="btn btn-danger mt-3"><i class="bi bi-trash-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                
                    <form action="profile.php" method="post">
                        <div class="row">
                            <div class="col">
                                <h3>USER INFO :</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="username">username</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="username" id="username" value=" <?php echo $username; ?> ">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label">@Email</label>
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" <?php echo $email; ?> ">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                            </div>
                            <div class="col">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value=" <?php echo $password; ?> ">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <input class="btn btn-success" type="submit" name="update" value="update">
                            </div>
                        </div>
                    
                        <?php
                         
                            if (isset($_POST['update'])) {

                                include_once 'templates/database_connection.php';

                                $userId = $_SESSION['id'];
                                $user = $_POST['username'];
                                $userEmail = $_POST['email'];
                                $userPassword = $_POST['password'];
                                $sql = "UPDATE users SET username='$user' WHERE id='$id'";
                                if ($database_connection->query($sql) === true) {
                                    echo "user updated succefully";
                                } else {
                                    echo "user no updated";
                                }
                            }

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

