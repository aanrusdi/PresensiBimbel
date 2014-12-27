<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tentor | Sistem Presensi Bimbingan Belajar</title>
</head>
<body>

	<div class="container">
		<div class="col-md-offset-1 col-md-8">
		<h2 class="text-center text-info"> Input Data Presensi</h2>
			<form  method="POST" action="index.php?id=input_presensi_proses" >
				<table class="table table-striped table-bordered">
				<div class="form-group">
               <tr>
                   <td width=30%><label for="mapel">Mapel</label></td>
                   <td><select name="mapel" id="mapel" class="form-control">
				        <option value="#">-- Pilih Mapel --</option>
				        <option value="matematika">Matematika</option>
				        <option value="fisika">Fisika</option>
				        <option value="biologi">Biologi</option>
				        <option value="indonesia">B. Indonesia</option>
				        <option value="inggris">B. Inggris</option>
				    </select></td>
               </tr>
                <tr>
                   <td><label for="jenjang_pendidikan">Jenjang Pendidikan</label></td>
                   <td><select name="jenjang_pendidikan" id="jenjang_pendidikan" class="form-control">
				        <option value="#">-- Pilih Jenjang Pendidikan --</option>
				        <option value="sd">SD</option>
				        <option value="smp">SMP</option>
				        <option value="sma">SMA</option>
				    </select></td>
               </tr>
               <tr >
                   <td><label for="kategori_bimbel">Kategori Bimbel</label></td>
                   <td><select name="kategori_bimbel" id="kategori_bimbel" class="form-control">
				        <option value="#">-- Pilih Kategori Bimbel --</option>
				        <option value="kelompok">Kelompok</option>
				        <option value="private">Private</option>
				    </select> </td>
               </tr>
               <tr>
                   <td><label for="nama_siswa">Nama Siswa</td>
                   <td><select name="id_siswa" id="id_siswa" class="form-control">
                   		<option value="#">-- Pilih Nama Siswa --</option>
                   	<?php 
                   	include "config.php";
                   	$sql="SELECT * FROM siswa ORDER BY nama";
                   	if(!$query = mysql_query($sql))
                   		echo mysql_error();
                   	while($row = mysql_fetch_array($query)) {
                   ?>
                   	<option value="<?php echo $row['id_siswa']; ?>"><?php echo $row['nama']; ?></option> <?php
                   	} ?>
                   </td>
               </tr>
               
                </div>
               </table>
               <input type="hidden" id="id_tentor" name="id_tentor" value="<?php echo $_SESSION['id_tentor']; ?>"



				
				<div class="form-group">
			    	<button class="btn btn-primary" type="submit" name="submit" id="submit" >Submit</button>
			    	<button class="btn btn-danger" type="reset" id="reset" >Reset</button>
			    </div>
			</form>
		</div>
	</div>

</body>
</html>