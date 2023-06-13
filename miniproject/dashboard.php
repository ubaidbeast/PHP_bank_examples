<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .dashboard-card {
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .dashboard-card:hover {
      background-color: #f8f9fa;
    }
    .dashboard-card a {
      color: #fff;
      text-decoration: none;
    }
    .loans-card {
      background-color: #007bff;
    }
    .statement-card {
      background-color: #28a745;
    }
    .report-card {
      background-color: #dc3545;
    }
  </style>
    <title>dashboard</title>
</head>
<body>
    <?php include_once 'dashboard-nav.php' ?>
        
  <div class="container">
    <h1>Dashboard</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="dashboard-card loans-card">
          <a href="loans.php">
            <h2>Loans</h2>
            <p>Apply for a loan for any of your needs.</p>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="dashboard-card statement-card p-3">
          <a href="statements.php">
            <h2>Statement</h2>
            <p>View your account statement and transaction history.</p>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="dashboard-card report-card">
          <a href="reports.php">
            <h2>Reports</h2>
            <p>Generate financial reports and analysis.</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php 

    if (isset($_GET['id'])) {
        $selected = $_GET['id'];
        switch ($selected) {
            case 'profile':
                header("location: profile.php");
                break;
            case 'statements':
                header("location: statements.php");
                break;
            case 'loan':
                header("location: loans.php");
                break;
            case 'reports':
                header("location: reports.php");
                break;
            case 'logout':
                header("location: logout.php");
                break;
            default:
                echo "404 page not found";
                break;
        }
    }

?>