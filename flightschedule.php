<?php
$x = $_GET["flight_to"];
$y = $_GET["flight_from"];
$day= $_GET["flight_day"];



$sql = "SELECT * from plane_schedule WHERE F_from = '$y' and F_to = '$x' and Day = '$day'";
	
$conn = new mysqli("localhost","root","","airline");
$result = $conn->query($sql);

?>


<table>
	<tr>
		<td>From</td>
		<td>TO</td>
		<td> Day</td>
		<td> Departure</td>
		<td> Arrival</td>
		<td> ID</td>
	</tr>
</table>

<?php while($row=$result->fetch_assoc()){
?>

	<style type="text/css">

		table{
			margin-left: 25%;
		}

		tr{
			height:50px;
		}
		td{
			width: 100px;
			text-align: center;
		}


	</style>
<table>
	<tr>
		<td><?php echo ($row["F_from"])?></td>
		<td><?php echo ($row["F_to"])?></td>
		<td><?php echo ($row["Day"])?></td>
		<td><?php echo ($row["F_departure_time"])?></td>
		<td><?php  echo ($row["F_arrival_time"])?></td>
		<td><?php echo ($row["F_id"])?></td>
	</tr>

</table>






<?php } ?>


<html>
<head>
	<style type="text/css">
		h1{
			margin-left: 30%;
		}
		form{
			margin-left: 30%;
		}
	</style>

</head>
<body>

	<h1> Enter the flight ID you choose </h1>
<form action="customerdetails.php">
<input type="text" placeholder="fl_id" name="flight_id">
<input type="submit">
</form>
</body>
</html>