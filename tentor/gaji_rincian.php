<?php
include "config.php";

extract($_GET);
$id_tentor = $_SESSION['id_tentor'];
?>


<h2 class="text-center text-info">Rincian Gaji <?php echo $tanggal; ?></h2> <br />
        <table class="table table-striped table-bordered">
               
                <tr>
                		<?php 
	                	$sql="SELECT harga from presensi 
	                	where DATE_FORMAT(tanggal,'%M %Y') = '$tanggal'
						AND status='terverifikasi' AND id_tentor='$id_tentor' 
						AND jenjang_pendidikan='sd' AND kategori_bimbel='private'";
						
                   		if($query=mysql_query($sql))
	                   		echo mysql_error();
						$n = mysql_num_rows($query);
						$total =0;
						while($row = mysql_fetch_array($query)) {
	                   		$total= $total + $row['harga'];
	                   		$harga = $row['harga'];
	                   	} 
                		?>
                   <td width=30%>SD Private </td>
                   <td width=30%><?php echo $n; ?> x Rp. 25.000,-</td>
                   <td>Rp. <?php echo number_format($total,2 ,',','.'); ?></td>
               </tr>

               <tr>
                		<?php 
	                	$sql="SELECT harga from presensi 
	                	where DATE_FORMAT(tanggal,'%M %Y') = '$tanggal'
						AND status='terverifikasi' AND id_tentor='$id_tentor' 
						AND jenjang_pendidikan='sd' AND kategori_bimbel='kelompok'";
						
                   		if($query=mysql_query($sql))
	                   		echo mysql_error();
						$n = mysql_num_rows($query);
						$total =0;
						while($row = mysql_fetch_array($query)) {
	                   		$total= $total + $row['harga'];
	                   		$harga = $row['harga'];
	                   	} 
                		?>
                   <td >SD Kelompok </td>
                   <td ><?php echo $n; ?> x  Rp. 20.000,-</td>
                   <td>Rp. <?php echo number_format($total,2 ,',','.'); ?></td>
               </tr>
               
				
				<tr>
                		<?php 
	                	$sql="SELECT harga from presensi 
	                	where DATE_FORMAT(tanggal,'%M %Y') = '$tanggal'
						AND status='terverifikasi' AND id_tentor='$id_tentor' 
						AND jenjang_pendidikan='smp' AND kategori_bimbel='private'";
						
                   		if($query=mysql_query($sql))
	                   		echo mysql_error();
						$n = mysql_num_rows($query);
						$total =0;
						while($row = mysql_fetch_array($query)) {
	                   		$total= $total + $row['harga'];
	                   		$harga = $row['harga'];
	                   	} 
                		?>
                   <td >SMP Private </td>
                   <td ><?php echo $n; ?> x  Rp. 30.000,-</td>
                   <td>Rp. <?php echo number_format($total,2 ,',','.'); ?></td>
               </tr>
               
               <tr>
                		<?php 
	                	$sql="SELECT harga from presensi 
	                	where DATE_FORMAT(tanggal,'%M %Y') = '$tanggal'
						AND status='terverifikasi' AND id_tentor='$id_tentor' 
						AND jenjang_pendidikan='smp' AND kategori_bimbel='kelompok'";
						
                   		if($query=mysql_query($sql))
	                   		echo mysql_error();
						$n = mysql_num_rows($query);
						$total =0;
						while($row = mysql_fetch_array($query)) {
	                   		$total= $total + $row['harga'];
	                   		$harga = $row['harga'];
	                   	} 
                		?>
                   <td >SMP Kelompok </td>
                   <td ><?php echo $n; ?> x  Rp. 25.000,-</td>
                   <td>Rp. <?php echo number_format($total,2 ,',','.'); ?></td>
               </tr>
                
                <tr>
                		<?php 
	                	$sql="SELECT harga from presensi 
	                	where DATE_FORMAT(tanggal,'%M %Y') = '$tanggal'
						AND status='terverifikasi' AND id_tentor='$id_tentor' 
						AND jenjang_pendidikan='sma' AND kategori_bimbel='private'";
						
                   		if($query=mysql_query($sql))
	                   		echo mysql_error();
						$n = mysql_num_rows($query);
						$total =0;
						while($row = mysql_fetch_array($query)) {
	                   		$total= $total + $row['harga'];
	                   		$harga = $row['harga'];
	                   	} 
                		?>
                   <td >SMA Private </td>
                   <td ><?php echo $n; ?> x  Rp. 35.000,-</td>
                   <td>Rp. <?php echo number_format($total,2 ,',','.'); ?></td>
               </tr>

               <tr>
                		<?php 
	                	$sql="SELECT harga from presensi 
	                	where DATE_FORMAT(tanggal,'%M %Y') = '$tanggal'
						AND status='terverifikasi' AND id_tentor='$id_tentor' 
						AND jenjang_pendidikan='sma' AND kategori_bimbel='kelompok'";
						
                   		if($query=mysql_query($sql))
	                   		echo mysql_error();
						$n = mysql_num_rows($query);
						$total =0;
						while($row = mysql_fetch_array($query)) {
	                   		$total= $total + $row['harga'];
	                   		$harga = $row['harga'];
	                   	} 
                		?>
                   <td >SMA Kelompok </td>
                   <td ><?php echo $n; ?> x  Rp 30.000,-</td>
                   <td>Rp. <?php echo number_format($total,2 ,',','.'); ?></td>
               </tr>
               <tr>
	               	<td colspan="2"><strong>Total</strong></td>
	               	<td>Rp. <?php echo number_format($t,2 ,',','.'); ?></td>
	               </tr>
               </table>

<?php
?>