<?php
include "config.php";

extract($_GET);

if($ver == '1') {

	$sql="UPDATE presensi SET status = 'terverifikasi' where id_presensi='$idp'";
	if(!$query = mysql_query($sql))
		echo mysql_error();
	?>
	
	<div class="alert alert-success">
		<h3 class="text-center"><strong>Presensi berhasil dikonfirmasi</strong></h3>
	</div>

	<?php

}
else if($ver == '0') {
	$sql="DELETE from presensi where id_presensi='$idp'";
	if(!$query = mysql_query($sql))
		echo mysql_error();
	?>
	
	<div class="alert alert-danger">
		<h3 class="text-center"><strong>Presensi dibatalkan</strong></h3>
	</div>

	<?php
}

?>