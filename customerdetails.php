<?php
$id = $_GET["flight_id"];

$sql = "SELECT * from plane_schedule WHERE F_id = '$id'";

$conn = new mysqli("localhost","root","","airline");
$result = $conn->query($sql);

$row=$result->fetch_assoc();

?>
<html>

<body>
	<h2  style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;"> Your selected flight is :</h2>
<h1  style="margin-top: 20px; margin-bottom: 20px; margin-left: 35%;"> <?php echo($id) ?></h1>

<h3  style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;">The flight details are :-</h3>
<table style="background:#c0e6fa; margin-left: 18%;">
<tr style="height: 50px;">
		<td style="width: 100px; text-align: center; border: 2px solid black; "><?php echo ($row["F_from"])?></td>
		<td style="width: 100px; text-align: center; border: 2px solid black;"><?php echo ($row["F_to"])?></td>
		<td style="width: 100px; text-align: center; border: 2px solid black;"><?php echo ($row["Day"])?></td>
		<td style="width: 100px; text-align: center; border: 2px solid black;"><?php echo ($row["F_departure"])?></td>
		<td style="width: 100px; text-align: center; border: 2px solid black;"><?php  echo ($row["F_arrival"])?></td>
		<td style="width: 100px; text-align: center; border: 2px solid black;"><?php echo ($row["F_id"])?></td>
</tr>
</table>
<form action="booking.php">

<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;">Enter the flight number : <input type =" text" name="fno"></div>
<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;"> Enter your first name : <input type =" text" name="fn"></div>
<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;"> Enter your Last name : <input type =" text" name="ln"></div>
<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;"> Enter your Phone number : <input type =" text" name="phn"></div>
<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;"> Enter your Email : <input type =" text" name="email"></div>
<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 30%;"> Enter document to verify  : <input type =" text" name="doc"></div>
<input type="submit">
</form>
</body>
</html>