<?php session_start() ?>
<!DOCTYPE html>
<html>
	
	<?php include_once('./templates/header.php'); ?>
    <?php include_once 'verifyLogIn.php'; ?>

    <div class="form-c">
        
        <form class="border p-5 rounded-2 mine" action="login.php" method="post">
            <div class="mb-3">
                <h2>log in</h2>
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Bussiness alias</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="enter username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div>
                <p>don't have an account ? <span><a href="sighnup.php">Sighnup</a></span></p>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </form>
    </div>
		
	<?php include_once('./templates/footer.php'); ?>

</html>
