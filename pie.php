<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db = "diary";

$conn = mysqli_connect($servername, $username, $password, $db); // update your connection params

$query = "SELECT state, lang_number FROM state"; //update your query as needed

$results = mysqli_query($conn, $query);
$pieData = array();

while ($row = mysqli_fetch_array($results)) {
    $acc_type = $row ['state'];
    $acc_num = $row ['lang_number'];
    $pieData[] = array($row['state'], $row['lang_number']);
}
?>

<div class="hellcontainer">
    <div id="chart_div"></div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script type="text/javascript">
google.load("visualization","1",{packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart()
{

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'State');
    data.addColumn('number', 'speakers(in millions)');
    data.addRows(<?php echo json_encode($pieData, JSON_NUMERIC_CHECK); ?>);

    var options = {'title':'Language spoken',
                           'width':400,
                           'height':300};

    var chart=new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data,options);

}
</script>
<body>
</body>
</html>