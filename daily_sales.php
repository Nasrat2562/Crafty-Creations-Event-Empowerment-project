
<?php
$page_title = 'Yearly Sales';
require_once('includes/load.php');
require_once('includes/functions.php');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_db";

$con = mysqli_connect($servername, $username, $password, $dbname);

// Check database connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data for the last 6 years
$query = "SELECT year, sales FROM yearly_sales ORDER BY year DESC LIMIT 6";
$result = mysqli_query($con, $query);

// Check query execution
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$years = [];
$salesData = [];

if (mysqli_num_rows($result) >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        $years[] = $row['year'];
        $salesData[] = $row['sales'];
    }
} else {
    echo "No data found in the database.";
    exit; // Stop further execution
}
?>

<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
</head>
<body>
    <canvas id="myChart" style="height: auto; width: 500px;"></canvas>

    <?php
    // Pass PHP variables to JavaScript
    echo "<input type='hidden' id='years' value='" . implode(',', $years) . "' >";
    echo "<input type='hidden' id='salesData' value='" . implode(',', $salesData) . "' >";
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    <script>
        var years = document.getElementById("years").value.split(',');
        var salesData = document.getElementById("salesData").value.split(',');

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: years,
                datasets: [{
                    label: 'Yearly Sales',
                    data: salesData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Red
                        'rgba(54, 162, 235, 0.2)', // Blue
                        'rgba(255, 206, 86, 0.2)', // Yellow
                        'rgba(75, 192, 192, 0.2)', // Green
                        'rgba(153, 102, 255, 0.2)', // Purple
                        'rgba(255, 159, 64, 0.2)' // Orange
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>

<?php include_once('layouts/footer.php'); ?>
