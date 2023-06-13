<!DOCTYPE html>
<html>
	
	<?php include('./templates/header.php'); ?>

		<div class="container d-f mt-3">
			<h1>Contact Us</h1>
			<p>Have any questions or concerns? Please fill out the form below and we will get back to you as soon as possible.</p>
			<form>
				<div class="form-group">
					<label for="name">Your Name</label>
					<input type="text" class="form-control" id="name" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

	<?php include('./templates/footer.php'); ?>

</html>