<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Reports Template</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include_once 'dashboard-nav.php' ?>
    <div class="container mt-3">
        <h1>Bank Reports</h1>

        <table class="table table-group-divider">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Transaction Type</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-05-28</td>
                    <td>Deposit</td>
                    <td>Salary</td>
                    <td>$2,500.00</td>
                </tr>
                <tr>
                    <td>2023-05-29</td>
                    <td>Withdrawal</td>
                    <td>Groceries</td>
                    <td>-$150.00</td>
                </tr>
                <tr>
                    <td>2023-05-30</td>
                    <td>Deposit</td>
                    <td>Savings transfer</td>
                    <td>$1,000.00</td>
                </tr>
                <tr>
                    <td>2023-05-30</td>
                    <td>Withdrawal</td>
                    <td>Restaurant bill</td>
                    <td>-$75.00</td>
                </tr>
                <tr>
                    <td>2023-06-01</td>
                    <td>Deposit</td>
                    <td>Investment return</td>
                    <td>$500.00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
