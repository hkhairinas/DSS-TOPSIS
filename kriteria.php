<?php
include 'connect.php';
include 'header.html';
$sql = "SELECT kd_kriteria, nm_kriteria, atribut, bobot FROM tkriteria";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alternatif - Topsis</title>
</head>
<body>
	<div class="w3-container w3-centered">
		<h2>Data Kriteria</h2>
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-border w3-border-blue w3-round">Input</button>
		<div id="id01" class="w3-modal">
			<div class="w3-modal-content" style="width: 300px">
		    <div class="w3-container">
		    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		    <div class="w3-container w3-white w3-center" style="width: 300px">
				<h2>Input Alternatif</h2>
		      	<form class="w3-container" action="proseskriteria.php" method="post">
				  	<label class="w3-text-teal"><b>Kode</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="kd">
			  		<label class="w3-text-teal"><b>Nama Kriteria</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="nm">
			  		<label class="w3-text-teal"><b>Atribut</b></label>
			  		<select class="w3-select w3-border" name="atr">
			  			<option value="Benefit">Benefit</option>
			  			<option value="Cost">Cost</option>
			  		</select>
			  		<label class="w3-text-teal"><b>Bobot(%)</b></label>
			  		<input class="w3-input w3-border w3-light-grey" type="text" name="bbt"><br>
			  		<button type="submit" class="w3-button w3-white w3-border w3-border-blue w3-round">Tambah</button>
				</form> 	
			</div>
		    </div>
		    </div>
		</div>
		<table class="w3-table-all w3-border">
			<tr>
				<th>Kode</th>
				<th>Nama Kriteria</th>
				<th>Atribut</th>
				<th>Bobot(%)</th>
			</tr>
			<?php 
			if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				?>
			<tr>
				<td><?php echo $row["kd_kriteria"];?></td>
				<td><?php echo $row["nm_kriteria"];?></td>
				<td><?php echo $row["atribut"];?></td>
				<td><?php echo $row["bobot"];?></td>
			</tr>
			<?php }}?>
		</table>
	</div>
</body>
</html>