<?php 
include "config.php";

extract($_POST);

$sql="INSERT INTO siswa(nama, alamat, tempat_lahir, tanggal_lahir, agama, nope, username, password) VALUES ('$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$agama', '$nope', '$username', '$password')"; 

 if(!empty($_POST['nama'])) {
 	if(!$query = mysql_query($sql))
		echo mysql_error(); 
	else
		echo "<h2 class='text-center text-info'>Terima kasih, Data berhasil di Input</h2>";
		sleep(1);
		?><script language="JavaScript">
			document.location='index.php?id=siswa_lihat_data'</script>
		<?php
}


?>