<?php 
include "config.php";

extract($_POST);
extract($_GET);


if(!empty($_POST['nama'])) {
	$sql= "UPDATE tentor SET nama='$nama', alamat='$alamat', agama='$agama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nope='$nope', username='$username', password='$password' WHERE id_tentor='$no'";

 	if(!$query = mysql_query($sql))
		echo mysql_error(); 
	else {
		
		echo "<h2 class='text-center text-info'>Terima kasih, Data berhasil di edit</h2>";
		sleep(1);
		?><script language="JavaScript">
			document.location='index.php?id=tentor_lihat_data'</script>
		<?php
	}
}
?>