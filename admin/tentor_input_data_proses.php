<?php 
include "config.php";

extract($_POST);

$sql="INSERT INTO tentor(nama, alamat, tempat_lahir, tanggal_lahir, agama, nope, username, password) VALUES ('$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$agama', '$nope', '$username', '$password')"; 

 if(!empty($_POST['nama'])) {
 	if(!$query = mysql_query($sql))
		echo mysql_error(); 
	else
		echo "<h2 class='text-info text-center'>Terima kasih, Data berhasil di masukkan</h2>";
}


?>