<?php
include 'connect.php';
$kd = $_POST["kd"];
$nm = $_POST["nm"];
$k1 = $_POST["k1"];
$k2 = $_POST["k2"];
$k3 = $_POST["k3"];
$k4 = $_POST["k4"];
$k5 = $_POST["k5"];
$k6 = $_POST["k6"];

$sql = "INSERT INTO talternatif VALUES ('$kd','$nm','$k1','$k2','$k3','$k4','$k5','$k6')";
if($conn->query($sql) == TRUE){
	header("Location:alternatif.php");
}
else{
	echo "error";
}
$conn->close();
?>