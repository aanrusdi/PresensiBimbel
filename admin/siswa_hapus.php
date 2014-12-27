<?php

include "config.php";

$no=$_GET['no'];

$sql="DELETE from siswa where id_siswa='$no'";

if(!$query= mysql_query($sql))
	echo mysql_error();
else
{
	?><script language="JavaScript">
	document.location='index.php?id=siswa_lihat_data'</script>
	<?php
}
	


?>