

<!DOCTYPE html>
<html>
	
	<?php include('./templates/header.php'); ?>
    
     <div class="form-c">
        <form class="border p-5 bg-black bg-gradient text-white rounded-2 shadow-lg" action="sighnup.php" method="post">
            <div>
                <h2>Sighn up</h2>
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Bussiness alias</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="enter username">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter email">
                <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="enter password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">re-write Password</label>
                <input type="password" name="password-again" class="form-control" id="exampleInputPasswordagain1" placeholder="re-enter password">
            </div>
            <button type="submit" name="submit" class="btn btn-outline-light">Sighn up</button>
        </form>
     </div>
		
	<?php include('./templates/footer.php'); ?>

</html>
<?php 

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   include_once('./templates/database_connection.php');
}

$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
$database_connection->query($sql);

if ($database_connection->query($sql) === true) {
    echo "sighn up succesfull";
} else {
    echo "sighn up failed";
}

?>