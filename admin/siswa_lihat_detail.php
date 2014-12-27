<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Sistem Presensi Bimbingan Belajar</title>
</head>
<body>
		<h2 class="text-center text-info">Detail Biodata Siswa</h2> <br />
		<?php

		include "config.php";
		$no=$_GET['no'];

		$sql="SELECT * FROM siswa where id_siswa='$no'";

		if(!$query = mysql_query($sql))
		echo mysql_error();

		while($row = mysql_fetch_array($query))
		{
		?>
               <table class="table table-striped table-bordered">
               <tr>
                   <td width=30%>Nama</td>
                   <td><?php echo $row['nama']; ?></td>
               </tr>
                <tr>
                   <td>Agama</td>
                   <td><?php echo $row['agama']; ?></td>
               </tr>
               <tr >
                   <td>Tempat, Tanggal Lahir</td>
                   <td><?php echo $row['tempat_lahir']; ?>, <?php echo date_format(date_create_from_format('Y-m-d',$row['tanggal_lahir']), 'd-M-Y'); ?> </td>
               </tr>
               <tr>
                   <td>N. HandPhone</td>
                   <td><?php echo $row['nope'] ?></td>
               </tr>
               <tr>
                   <td>Alamat</td>
                   <td><?php echo $row['alamat']; ?></td>
               </tr>
               
                <?php } ?>
               </table>

</body>
</html>