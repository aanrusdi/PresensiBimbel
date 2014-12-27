<?php 
include "config.php";

extract($_POST);
$sql2 = "SELECT * from gaji where jenjang='$jenjang_pendidikan' AND jenis='$kategori_bimbel' LIMIT 1";
if(!$query2 = mysql_query($sql2))
		echo mysql_error(); 

while($row = mysql_fetch_array($query2)) {
	$harga = $row['harga'];
}

$sql="INSERT INTO presensi(id_tentor, id_siswa, mapel, jenjang_pendidikan, kategori_bimbel, status, tanggal, harga) VALUES ('$id_tentor', '$id_siswa', '$mapel', '$jenjang_pendidikan', '$kategori_bimbel', 'belum verifikasi', now(), '$harga')"; 

 if(!empty($_POST['id_tentor'])) {
 	if(!$query = mysql_query($sql))
		echo mysql_error(); 
	else {
		?>
		<div class="alert alert-danger">
			<h3 class="text-center"><strong>Data berhasil di Input</strong></h3>
			<h3 class="text-center">Silahkan minta siswa untuk melakukan validasi</h3>
		</div>
		<div class="row col-md-offset-6">
			<a href="index.php?id=logout" role="button" class="btn btn-success btn-large">Lanjut</a>
		</div>
		<?php }
}


?>