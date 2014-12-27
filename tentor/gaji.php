<?php
include "config.php";

$id_tentor = $_SESSION['id_tentor'];
$sql="SELECT DATE_FORMAT(tanggal,'%M %Y') tanggal, 
			SUM(harga) total_pendapatan FROM presensi 
			where id_tentor='$id_tentor' AND status='terverifikasi'
			GROUP BY DATE_FORMAT(tanggal,'%Y %M') ASC";
if(!$query = mysql_query($sql))
	echo mysql_error();
?>
	<h2 class="text-center text-info">History Gaji</h2> <br />
        <table class="table table-striped table-bordered">
        <tr class="success" align="center">
            <th>No.</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
	<?php
	$i=1;
while($row = mysql_fetch_array($query)) { ?>
		<tr>
					<td><?php echo $i++; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo number_format($row['total_pendapatan'],2 ,',','.'); ?></td>
                    <td><a href="index.php?id=gaji_rincian&tanggal=<?php echo $row['tanggal']; ?>&t=<?php echo $row['total_pendapatan']; ?>" role="button" class="btn btn-success btn-sm">Rincian</a>
		</td>
                    
                    
                </tr>
                <?php } ?>
              </table>

<?php
?>