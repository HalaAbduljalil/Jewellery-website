<?php
include 'sidebar.html';
header('Connect-Type:application/json');
define('DB_HOST','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','chartmarjan');
$mysqli=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if(!$mysqli)
{
    die("connection faild:".$mysqli->error);
}
$query=sprintf("Select * from chartmarjan ");
$result=$mysqli->query($query);
$json=[];
while($row=$result->fetch_array())
{

    $json[]=$row[1];
    $json2[]=(int)$row[2];
}
$result->close();
$mysqli->close();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <style>

        section
        {
            width: 30%;


            margin-left:  auto;
            margin-right: auto;

            position: center;
        }
    </style>

</head>
<body>
<section>
    <canvas id="myChart" width="50%" height="50%" class="chartjd-render-monitor" ></canvas>
</section>
<script >
    let ctx = document.getElementById('myChart').getContext('2d');
    let myChart = new Chart(ctx, {
        type:'bar',
        data: {
            labels: <?php echo json_encode($json) ?>,
            datasets: [{
                label: '# of amount',
                data: <?php echo json_encode($json2) ?>,
                backgroundColor:
                    'rgba(255, 99, 132, 0.8)',

                borderColor:
                    'rgba(255, 99, 132, 1)'
                ,
                borderWidth: 1

            }]

        }
        ,
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