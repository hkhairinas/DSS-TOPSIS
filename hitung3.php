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
				<td><?php echo $k1=$k1ss*0.1;?></td>
				<td><?php echo $k2=$k2ss*0.1;?></td>
				<td><?php echo $k3=$k3ss*0.2;?></td>
				<td><?php echo $k4=$k4ss*0.2;?></td>
				<td><?php echo $k5=$k5ss*0.15;?></td>
				<td><?php echo $k6=$k6ss*0.25;?></td>
			</tr>
			<?php } }?>
		</table>
		<br>
		<p>A+ A-</p>
		<table class="w3-table-all" style="width: 800px">
			<tr>
				<td>A+</td>
				<td><?php echo 0.039473394753431;?></td>
				<td><?php echo 0.040947043135689;?></td>
				<td><?php echo 0.086210544972852;?></td>
				<td><?php echo 0.08236218435523;?></td>
				<td><?php echo 0.063411667727323;?></td>
				<td><?php echo 0.10022296571716;?></td>
			</tr>
			<tr>
				<td>A-</td>
				<td><?php echo 0.033642097801219;?></td>
				<td><?php echo 0.033977333665785;?></td>
				<td><?php echo 0.062861855709371;?></td>
				<td><?php echo 0.070849190843209;?></td>
				<td><?php echo 0.052064316660329;?></td>
				<td><?php echo 0.089087080637473;?></td>
			</tr>
		</table>
		<br>
		<p>D+ + D-</p>
		<table class="w3-table-all" style="width: 800px">
			<tr>
				<td>Kriteria</td>
				<td>D+</td>
				<td>D-</td>
				<td>D+ + D-</td>
			</tr>
			<tr><td>A01</td>
				<td><?php echo 0.037915246;?></td>
				<td><?php echo 0.032510307;?></td>
				<td><?php echo 0.070425553;?></td>
			</tr>
			<tr><td>A02</td>
				<td><?php echo 0.039270383;?></td>	
				<td><?php echo 0.032822874;?></td>
				<td><?php echo 0.072093257;?></td>
			</tr>
			<tr><td>A03</td>	
				<td><?php echo 0.078778287;?></td>
				<td><?php echo 0.058910243;?></td>
				<td><?php echo 0.13768853;?></td>
			</tr>
			<tr><td>A04</td>
				<td><?php echo 0.075578655;?></td>
				<td><?php echo 0.065829583;?></td>
				<td><?php echo 0.141408238;?></td>
			</tr>
			<tr><td>A05</td>
				<td><?php echo 0.059390628;?></td>
				<td><?php echo 0.049353624;?></td>
				<td><?php echo 0.108744252;?></td>
			</tr>
			<tr><td>A06</td>
				<td><?php echo 0.090178323;?></td>
				<td><?php echo 0.081150573;?></td>
				<td><?php echo 0.171328896;?></td>
			</tr>
		</table>
		<br>
		<p>Hasil Perangkingan</p>
		<table class="w3-table-all" style="width: 500px">
			<tr>
				<td>A06</td>
				<td><?php echo 0.171328896;?></td>
			</tr>
			<tr>
				<td>A04</td>
				<td><?php echo 0.141408238;?></td>
			</tr>
			<tr>
				<td>A03</td>
				<td><?php echo 0.13768853;?></td>
			</tr>
			<tr>
				<td>A05</td>
				<td><?php echo 0.108744252;?></td>
			</tr>
			<tr>
				<td>A02</td>
				<td><?php echo 0.072093257;?></td>
			</tr>
			<tr>
				<td>A01</td>
				<td><?php echo 0.070425553;?></td>
			</tr>
		</table>
</body>
</html>