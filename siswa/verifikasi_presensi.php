<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	include "config.php";
	$id_siswa = $_SESSION['id_siswa'];
	$sql="SELECT * from presensi where status='belum verifikasi' AND id_siswa='$id_siswa'";

	if(!$query = mysql_query($sql))
		echo mysql_error();
	?>
	<h2 class="text-center text-info">Verifikasi Bimbel</h2> <br />
               <table class="table table-striped table-bordered">
               <tr class="success" align="center">
                   <th>No.</th>
                   <th>Tanggal</th>
                   <th>Tentor</th>
                   <th>Mapel</th>
                   <th>Jenjang</th>
                   <th>Jenis</th>
                   <th>Aksi</th>
               </tr>
			<?php
			$i=1;
			while($row = mysql_fetch_array($query)) {
			?>
               <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo date_format(date_create_from_format('Y-m-d',$row['tanggal']), 'd-M-Y'); ?></td>
                    <td><?php 
                        $id_tentor = $row['id_tentor'];
                        $sql2  = "SELECT * from tentor where id_tentor='$id_tentor'";
                        if(!$query2 = mysql_query($sql2))
                          echo mysql_error();
                        while($row2 = mysql_fetch_array($query2)) {
                          echo $row2['nama'];
                        }
                      ?></td>
                    <td><?php echo $row['mapel']; ?></td>
                    <td><?php echo $row['jenjang_pendidikan']; ?></td>
                    <td><?php echo $row['kategori_bimbel']; ?></td>
                    <td><a href="index.php?id=verifikasi_proses&ver=1&idp=<?php echo $row['id_presensi']; ?>" role="button" class="btn btn-success btn-sm">Konfirmasi</a>
                    <a href="index.php?id=verifikasi_proses&ver=0&idp=<?php echo $row['id_presensi']; ?>" role="button" class="btn btn-danger btn-sm">Tolak</a>
		</td>
                    
                    
                </tr>
                <?php } ?>
              </table>
</body>
</html>
