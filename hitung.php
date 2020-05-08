<?php
include 'connect.php';
include 'header.html';
$sql = "SELECT * FROM talternatif";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kriteria - Topsis</title>
</head>
<body>
	<div class="w3-container w3-centered">
		<center>
		<p>Konversi Data Awal / 100</p>
		<table class="w3-table-all" style="width: 1000px">
			<tr>
				<th>Kode</th>
				<th>Alternatif</th>
				<th>K1</th>
				<th>K2</th>
				<th>K3</th>
				<th>K4</th>
				<th>K5</th>
				<th>K6</th>
			</tr>
			<?php 
			$k1s = 0;$k2s = 0;$k3s = 0;$k4s = 0;$k5s = 0;$k6s = 0;

			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $row["kd_alter"];?></td>
				<td><?php echo $row["nm_alter"];?></td>
				<td><?php echo $row["k1"]/100;?></td>
				<td><?php echo $row["k2"]/100;?></td>
				<td><?php echo $row["k3"]/100;?></td>
				<td><?php echo $row["k4"]/100;?></td>
				<td><?php echo $row["k5"]/100;?></td>
				<td><?php echo $row["k6"]/100;?></td>
			</tr>
			<?php 
				$k1s+=$row['k1'];$k2s+=$row['k2'];$k3s+=$row['k3'];$k4s+=$row['k4'];$k5s+=$row['k5'];$k6s+=$row['k6']; } }?>
		</table>
		<br>
		<p>Matriks Ternormalisasi</p>
		<table class="w3-table-all" style="width: 800px">
			<tr>
				<th>K1</th>
				<th>K2</th>
				<th>K3</th>
				<th>K4</th>
				<th>K5</th>
				<th>K6</th>
			</tr>
			<tr>
				<?php $k1sqrt = sqrt($k1s/100); $k2sqrt = sqrt($k2s/100);$k3sqrt = sqrt($k3s/100);$k4sqrt = sqrt($k4s/100);$k5sqrt = sqrt($k5s/100);$k6sqrt = sqrt($k6s/100);?>
				<td><?php echo $k1sqrt;?></td>
				<td><?php echo $k2sqrt;?></td>
				<td><?php echo $k3sqrt;?></td>
				<td><?php echo $k4sqrt;?></td>
				<td><?php echo $k5sqrt;?></td>
				<td><?php echo $k6sqrt;?></td>
			</tr>
		</table>
		<br>
		<p>Normalisasi R</p>
		<?php include 'hitung2.php';?>
		<br>
		<p>Normalisasi x Bobot</p>
		<?php include 'hitung3.php';?>
		</center>
	</div>
</body>
</html>