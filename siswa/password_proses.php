<?php
include "config.php";

extract($_POST);

$sql=mysql_query("SELECT * FROM siswa WHERE username='$username' && password='$password'"); 
$number = mysql_num_rows($sql); 
		if($number==1) {
			if($password_baru == $password_baru2)
				{
				mysql_query("UPDATE siswa set password='$password_baru' where username='$username'");
				echo "<h2 class='text-center text-info'>Password anda telah sukses diganti</h2>";}
			else
				{
				?><script language="JavaScript">
					alert('Username / password yang anda masukkan salah');
					document.location='index.php?id=password'</script>
				<?php }
			}
		else {
			?><script language="JavaScript">
				alert('Username / password yang anda masukkan salah');
				document.location='index.php?id=password'</script>
			<?php }

?>