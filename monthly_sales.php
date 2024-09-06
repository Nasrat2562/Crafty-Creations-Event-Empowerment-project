<?php
  $page_title = 'Monthly Sales';
  require_once('includes/load.php');
  require_once('includes/functions.php');
 
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_db";


$con = mysqli_connect($servername,$username,$password,$dbname);


// Check database connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select jan,feb,march,april,may,june,july from saleschart";
$result = mysqli_query($con, $query);

// Check query execution
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$janData = [];
$febData = [];
$marchData = [];
$aprilData = [];
$mayData = [];
$juneData = [];
$julyData = [];

if (mysqli_num_rows($result) >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        $janData[] = $row['jan'];
        $febData[] = $row['feb'];
        $marchData[] = $row['march'];
        $aprilData[] = $row['april'];
        $mayData[] = $row['may'];
        $juneData[] = $row['june'];
        $julyData[] = $row['july'];
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

echo "<input type='hidden' id= 'jan' value = '" . implode(',', $janData) . "' >";
echo "<input type='hidden' id= 'feb' value = '" . implode(',', $febData) . "' >";
echo "<input type='hidden' id= 'march' value = '" . implode(',', $marchData) . "' >";
echo "<input type='hidden' id= 'april' value = '" . implode(',', $aprilData) . "' >";
echo "<input type='hidden' id= 'may' value = '" . implode(',', $mayData) . "' >";
echo "<input type='hidden' id= 'june' value = '" . implode(',', $juneData) . "' >";
echo "<input type='hidden' id= 'july' value = '" . implode(',', $julyData) . "' >";

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

<script>
    var jan = document.getElementById("jan").value.split(',');
    var feb = document.getElementById("feb").value.split(',');
    var march = document.getElementById("march").value.split(',');
    var april = document.getElementById("april").value.split(',');
    var may = document.getElementById("may").value.split(',');
    var june = document.getElementById("june").value.split(',');
    var july = document.getElementById("july").value.split(',');

    window.onload = function () {
        var config = {
            type: 'line',
            data: {
                datasets: [{
                    data: [
                        jan,
                        feb,
                        march,
                        april,
                        may,
                        june,
                        july
                    ],
                    label: 'Monthly Sales Report',
                    backgroundColor: [
                        "#0190ff",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#f312cb",
                        "#ff0060",
                        "#ffe400"
                    ],
                    hoverBackgroundColor: [
                        "#f38b4a",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#ffe400"
                    ]
                }],
                labels: [
                    'Jan',
                    'Feb',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July'
                ]
            },
            options: {
                responsive: true
            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };
</script>

</body>

</html>

<?php include_once('layouts/footer.php'); ?>


