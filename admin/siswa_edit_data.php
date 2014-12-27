<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Sistem Presensi Bimbingan Belajar</title>
</head>
<body>
<?php 
include "config.php";

$no=$_GET['no'];

$sql="select * from siswa where id_siswa='$no'";
if(! $query = mysql_query($sql));
	echo mysql_error();

while($row = mysql_fetch_array($query))
{
?>
	<div class="container">
		<div class="col-md-offset-1 col-md-8">
		<h2 class="text-center text-info"> Edit Data Siswa</h2></br></br>
			<form  method="POST" action="index.php?id=siswa_edit_data_proses&no=<?php echo $row['id_siswa']; ?>" >
				<div class="form-group">
			    	<label for="nama">Nama Lengkap</label>
			    	<input autofocus="autofocus" type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $row['nama']; ?>">
			  	</div>
			  	<div class="form-group">
			    	<label for="username">Username</label>
			    	<input type="text" class="form-control" name="username" id="username" placeholder="Digunakan untuk Login Sistem" value="<?php echo $row['username']; ?>">
			  	</div>
			  	<div class="form-group">
			    	<label for="password">Password</label>
			    	<input type="password" class="form-control" name="password" id="password" placeholder="Digunakan untuk Login Sistem" value="<?php echo $row['password']; ?>">
			  	</div>
				<div class="form-group">
			    	<label for="agama">Agama</label>
			    	<input type="text" class="form-control" name="agama" id="agama" placeholder="Masukkan Agama" value="<?php echo $row['agama']; ?>">
			  	</div>
				<div class="form-group">
			    	<label for="nope">No. Handphone</label>
			    	<input type="text" class="form-control" name="nope" id="nope" placeholder="Masukkan No. Handphone" value="<?php echo $row['nope']; ?>">
			  	</div>
				<div class="form-group">
			    	<label for="tanggal_lahir">Tempat, Tanggal Lahir</label>
			    	<div class="row">
			    		<dicv class="col-md-3">
			    			<input type="text" class="form-control col-md-3" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat" value="<?php echo $row['tempat_lahir']; ?>"> 
			    		</dicv>
			    		<div class="col-md-5">
			    			<input type="text" class="form-control col-md-5" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal" value="<?php echo $row['tanggal_lahir']; ?>">
			  			</div>
			  		</div>
			  	</div>
				<div class="form-group">
			    	<label for="alamat">Alamat</label>
			    	<textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Masukan Alamat Lengkap"><?php echo $row['alamat']; ?></textarea>
			    </div>
				<div class="form-group">
			    	<button class="btn btn-primary" type="submit" name="submit" id="submit" >Submit</button>
			    	<button class="btn btn-danger" type="reset" id="reset" >Reset</button>
			    </div>
			</form>
		</div>
	</div>

	<?php } ?>

</body>
</html>