<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Bank Statement</title>
</head>
<body>
    <?php include_once 'dashboard-nav.php' ?>
  <div class="container">
    <h1 class="text-center mt-4">Bank Statement</h1>
    <table class="table table-bordered mt-4">
      <thead>
        <tr>
          <th>Date</th>
          <th>Description</th>
          <th>Debit</th>
          <th>Credit</th>
          <th>Balance</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01/05/2023</td>
          <td>Salary Deposit</td>
          <td>-</td>
          <td>$2,000.00</td>
          <td>$2,000.00</td>
        </tr>
        <tr>
          <td>03/05/2023</td>
          <td>Utility Bill Payment</td>
          <td>$100.00</td>
          <td>-</td>
          <td>$1,900.00</td>
        </tr>
        <tr>
          <td>07/05/2023</td>
          <td>Grocery Shopping</td>
          <td>$150.00</td>
          <td>-</td>
          <td>$1,750.00</td>
        </tr>
        <tr>
          <td>10/05/2023</td>
          <td>Restaurant Dinner</td>
          <td>$50.00</td>
          <td>-</td>
          <td>$1,700.00</td>
        </tr>
        <tr>
          <td>15/05/2023</td>
          <td>Online Shopping</td>
          <td>$200.00</td>
          <td>-</td>
          <td>$1,500.00</td>
        </tr>
        <tr>
          <td>20/05/2023</td>
          <td>Withdrawal</td>
          <td>-</td>
          <td>$500.00</td>
          <td>$1,000.00</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
