<?php
include 'connect.php';
$kd = $_POST["kd"];
$nm = $_POST["nm"];
$atr = $_POST["atr"];
$bbt = $_POST["bbt"];
echo $kd,$nm,$atr,$bbt;
$sql = "INSERT INTO tkriteria VALUES ('$kd','$nm','$atr','$bbt')";
if($conn->query($sql) == TRUE){
	header("Location:kriteria.php");
}
else{
	echo "error";
}
$conn->close();
?>