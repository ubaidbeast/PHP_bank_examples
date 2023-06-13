<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Loan Application</title>
</head>
<body>
    <?php include_once 'dashboard-nav.php' ?>
  <div class="container mt-5" style="text-align: center; width: 500px;">
    <h2>Loan Application Form</h2>
    <form class="border p-5  rounded-2 shadow-lg" action="loans.php" method="post">
      <div class="mb-3">
        <label for="amount" class="form-label">Loan Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" required>
      </div>
      <div class="mb-3">
        <label for="purpose" class="form-label">Loan Purpose</label>
        <select class="form-select" id="purpose" name="selected" required>
          <option value="">Select purpose</option>
          <option value="home">Home</option>
          <option value="car">Car</option>
          <option value="education">Education</option>
          <option value="business">Business</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="terms" class="form-label">Loan Terms (in months)</label>
        <input type="number" class="form-control" placeholder="Enter number of months" id="terms" name="date" required>
      </div>
      
      <button type="submit" class="btn btn-outline-secondary" name="loan" value="loan">Apply loan</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 

  if (isset($_POST['loan'])) {
    $amount = $_POST['amount'];
    $selected = $_POST['selected'];
    $date = $_POST['date'];

    include_once 'templates/database_connection.php';
    
  }

  $sql = "INSERT INTO loans(amount , purpose , months) VALUES( '$amount', '$selected', '$date' )";
  $result = $database_connection->query($sql);

  if ($result === true) {
    echo 'loan added';
  } else {
    echo 'loan NOT added';
  }

?>
