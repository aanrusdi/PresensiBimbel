<?php
session_start();
include "config.php";
extract($_POST);


#jika ditekan tombol login 
if(isset($_POST['submit'])) 
{
	if($_POST['status'] == 'admin') {
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$sql = mysql_query("SELECT * FROM admin WHERE username='$username' && password='$password'"); 
		if(!$number = mysql_num_rows($sql))
			echo mysql_error(); 
			if($number==1) { // login benar // 
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['status'] = 'admin';
				while($row = mysql_fetch_array($sql)) {
					$_SESSION['id_admin'] = $row['id_admin'];
					$_SESSION['nama'] = $row['username'];
				}
				?>
				<script language="JavaScript">alert('Selamat Anda berhasil login'); 
				document.location='admin'</script>
				<?php 
			} else { // jika login salah // 
				?>
				<script language="JavaScript">alert('Username atau password Anda salah')
				document.location='http://localhost/bimbel'</script>
				<?php 
			} 
	}

	if($_POST['status'] == 'tentor') {

		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$sql = mysql_query("SELECT * FROM tentor WHERE username='$username' && password='$password'"); 
		if(!$number = mysql_num_rows($sql))
			echo mysql_error(); 
			if($number==1) { // login benar // 
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['status'] = 'tentor';
				while($row = mysql_fetch_array($sql)) {
					$_SESSION['id_tentor'] = $row['id_tentor'];
					$_SESSION['nama'] = $row['nama'];
				}
				?>
				<script language="JavaScript">alert('Selamat Anda berhasil login'); 
				document.location='tentor'</script>
				<?php 
			} else { // jika login salah // 
				?>
				<script language="JavaScript">alert('Username atau password Anda salah')
				document.location='http://localhost/bimbel'</script>
				<?php 
			} 
	}

	if($_POST['status'] == 'siswa') {

		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$sql = mysql_query("SELECT * FROM siswa WHERE username='$username' && password='$password'"); 
		if(!$number = mysql_num_rows($sql))
			echo mysql_error(); 
			if($number==1) { // login benar // 
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['status'] = 'siswa';
				while($row = mysql_fetch_array($sql)) {
					$_SESSION['id_siswa'] = $row['id_siswa'];
					$_SESSION['nama'] = $row['nama'];
				}
				?>
				<script language="JavaScript">alert('Selamat Anda berhasil login'); 
				document.location='siswa'</script>
				<?php 
			} else { // jika login salah // 
				?>
				<script language="JavaScript">alert('Username atau password Anda salah')
				document.location='http://localhost/bimbel'</script>
				<?php 
			} 
	}
}
?>