<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include "config.php";

		$sql="select * from siswa"; 

		if(!$query = mysql_query($sql))
			echo mysql_error();
	?>
	<h2 class="text-center text-info">Data Siswa</h2> <br />
               <table class="table table-striped table-bordered">
               <tr class="success" align="center">
                   <th>No.</th>
                   <th>Nama</th>
                   <th>TTL</th>
                   <th>No. HP</th>
                    <th class="text-center">Tindakan</th>
               </tr>
               <?php $i =1;
				while($row = mysql_fetch_array($query))
				{ ?>
               <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['tempat_lahir']; ?>, <?php echo date_format(date_create_from_format('Y-m-d',$row['tanggal_lahir']), 'd-M-Y'); ?></td>
                    <td><?php echo $row['nope']; ?></td>
                    <td class="text-center"><a class="btn-lg" href="index.php?id=siswa_lihat_detail&no=<?php echo $row['id_siswa']; ?>"><span class="glyphicon glyphicon-list-alt text-success" aria-hidden="true" title="Lihat Detail"></span></a>

                    <a class="btn-lg" href="index.php?id=siswa_edit_data&no=<?php echo $row['id_siswa']; ?>"><span class="glyphicon glyphicon-pencil text-warning" aria-hidden="true" title="Edit Data"></span></a>

                    <a class="btn-lg" href="index.php?id=siswa_hapus&no=<?php echo $row['id_siswa']; ?>" onclick="return confirm('Yakin Mau di Hapus?')"><span class="glyphicon glyphicon-trash text-danger" aria-hidden="true" title="Hapus"></span></a>
				</td>
                </tr>
                <?php } ?>
              </table>
	
</body>
</html>