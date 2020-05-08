<?php
include 'connect.php';
include 'header.html';
$sql = "SELECT * FROM talternatif";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alternatif - Topsis</title>
</head>
<body>
	<div class="w3-container w3-centered">
		<h2>Data Alternatif</h2>
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-border w3-border-blue w3-round">Input</button>
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content" style="width: 300px">
		    <div class="w3-container">
		    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		    <div class="w3-container w3-white w3-center" style="width: 300px">
				<h2>Input Alternatif</h2>
		      	<form class="w3-container" action="prosesalternatif.php" method="post">
				  	<label class="w3-text-teal"><b>Kode</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="kd">
			  		<label class="w3-text-teal"><b>Nama Alternatif</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="nm">
			  		<label class="w3-text-teal"><b>K1 : Kesetiaan</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="k1">
			  		<label class="w3-text-teal"><b>K2 : Prestasi</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="k2">
			  		<label class="w3-text-teal"><b>K3 : Tanggung Jawab</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="k3">
			  		<label class="w3-text-teal"><b>K4 : Kejujuran</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="k4">
			  		<label class="w3-text-teal"><b>K5 : Kerjasama</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="k5">
			  		<label class="w3-text-teal"><b>K6 : Kepemimpinan</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="k6"><br>
			  		<button type="submit" class="w3-button w3-white w3-border w3-border-blue w3-round">Tambah</button>
				</form> 	
			</div>
		    </div>
		    </div>
		</div>
		<table class="w3-table-all">
			<tr>
				<th>Kode</th>
				<th>Nama Alternatif</th>
				<th>K1</th>
				<th>K2</th>
				<th>K3</th>
				<th>K4</th>
				<th>K5</th>
				<th>K6</th>
			</tr>
			<?php if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row["kd_alter"];?></td>
				<td><?php echo $row["nm_alter"];?></td>
				<td><?php echo $row["k1"];?></td>
				<td><?php echo $row["k2"];?></td>
				<td><?php echo $row["k3"];?></td>
				<td><?php echo $row["k4"];?></td>
				<td><?php echo $row["k5"];?></td>
				<td><?php echo $row["k6"];?></td>
			</tr>
		<?php } }?>
		</table>
	</div>
</body>
</html>