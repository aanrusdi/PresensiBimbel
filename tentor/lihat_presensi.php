<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include "config.php";
    $id = $_SESSION['id_tentor'];
		$sql="select * from presensi where id_tentor='$id' ORDER BY id_presensi DESC"; 

		if(!$query = mysql_query($sql))
			echo mysql_error();
	?>
	<h2 class="text-center text-info">History Presensi</h2> <br />
               <table class="table table-striped table-bordered">
               <tr class="success" align="center">
                   <th>No.</th>
                   <th>Tanggal</th>
                   <th>Mapel</th>
                   <th>Jenjang</th>
                   <th>Jenis</th>
                   <th>Nama Siswa</th>
                   <th>Status</th>
               </tr>
               <?php $i =1;
				while($row = mysql_fetch_array($query))
				{ ?>
               <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo date_format(date_create_from_format('Y-m-d',$row['tanggal']), 'd-M-Y'); ?></td>
                    <td><?php echo $row['mapel']; ?></td>
                    <td><?php echo $row['jenjang_pendidikan']; ?></td>
                    <td><?php echo $row['kategori_bimbel']; ?></td>
                    <td><?php 
                        $id_siswa = $row['id_siswa'];
                        $sql2  = "SELECT * from siswa where id_siswa='$id_siswa'";
                        if(!$query2 = mysql_query($sql2))
                          echo mysql_error();
                        while($row2 = mysql_fetch_array($query2)) {
                          echo $row2['nama'];
                        }
                      ?></td>
                    <td><?php if($row['status'] == 'belum verifikasi') { ?>
                            <span class="label label-danger"><?php echo $row['status']; ?></span>
                          <?php } if($row['status'] == 'terverifikasi') { ?>
                              <span class="label label-info"><?php echo $row['status']; ?></span> <?php } ?>
                    </td>
                    
                </tr>
                <?php } ?>
              </table>
	
</body>
</html>