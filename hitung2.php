<?php
include 'connect.php';
$sql = "SELECT * FROM talternatif";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table class="w3-table-all" style="width: 800px">
			<tr>
				<th>Alternatif</th>
				<th>K1</th>
				<th>K2</th>
				<th>K3</th>
				<th>K4</th>
				<th>K5</th>
				<th>K6</th>
			</tr>
			<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){ 
					$k1ss = $row["k1"]/100/2.2293496809608; 
					$k2ss = $row["k2"]/100/2.2956480566498; 
					$k3ss = $row["k3"]/100/2.227105745132; 
					$k4ss = $row["k4"]/100/2.2583179581272;
					$k5ss = $row["k5"]/100/2.2472205054244;
					$k6ss = $row["k6"]/100/2.2449944320644;?>
			<tr>
				<td><?php echo $row["kd_alter"];?></td>
				<td><?php echo $k1ss;?></td>
				<td><?php echo $k2ss;?></td>
				<td><?php echo $k3ss;?></td>
				<td><?php echo $k4ss;?></td>
				<td><?php echo $k5ss;?></td>
				<td><?php echo $k6ss;?></td>
			</tr>
			<?php } }?>
		</table>
		<br>
		<p>Bobot</p>
		<table class="w3-table-all" style="width: 800px">
			<tr>
				<th>Bobot</th>
				<th>K1</th>
				<th>K2</th>
				<th>K3</th>
				<th>K4</th>
				<th>K5</th>
				<th>K6</th>
			</tr>
			<tr>
				<td>Bobot / 100</td>
				<td><?php echo $b1 = 10/100;?></td>
				<td><?php echo $b2 = 10/100;?></td>
				<td><?php echo $b3 = 20/100;?></td>
				<td><?php echo $b4 = 20/100;?></td>
				<td><?php echo $b5 = 15/100;?></td>
				<td><?php echo $b6 = 25/100;?></td>
			</tr>
		</table>
</body>
</html>