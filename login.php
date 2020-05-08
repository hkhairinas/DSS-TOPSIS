<?php
include 'connect.php';
$name = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT id, uname, upass FROM tuser WHERE uname = '$name' AND upass = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	header("Location: home.php");
}
else{
	header("Location: index.html");
}
$conn->close();
?>