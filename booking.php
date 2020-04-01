<?php
$f_name = $_GET["fn"];
$l_name = $_GET["ln"];
$ph_num = $_GET["phn"];
$email_id = $_GET["email"];
$document = $_GET["doc"];

$f_id = $_GET["fno"];



$conn = new mysqli("localhost","root","","airline");

$sql = "insert into customerinfo values ('$f_name', '$l_name' , '$ph_num' , '$email_id', '$document' , $f_id);";

if ($conn->query($sql) === TRUE) {
    echo "Your ticket has been booked";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>