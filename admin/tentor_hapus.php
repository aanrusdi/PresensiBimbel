<?php

include "config.php";

$no=$_GET['no'];

$sql="DELETE from tentor where id_tentor='$no'";

if(!$query= mysql_query($sql))
	echo mysql_error();
else
{
	?><script language="JavaScript">
	document.location='index.php?id=tentor_lihat_data'</script>
	<?php
}
	


?>