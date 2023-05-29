<!DOCTYPE html>
<html>
<style>
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
</style>
<head>
	<title>Edit</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($tb_laundry as $u){ ?>
	<form action="<?php echo base_url(). 'ControlLaundry/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Jenis</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="jenis" value="<?php echo $u->jenis ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $u->jumlah ?>"></td>
			</tr>
			<tr>
				<td>Berat</td>
				<td><input type="text" name="berat" value="<?php echo $u->berat ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>