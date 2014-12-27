<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Sistem Presensi Bimbingan Belajar</title>
</head>
<body>

	<div class="container">
		<div class="col-md-offset-1 col-md-8">
		<h2 class="text-center text-info"> Ubah Password Admin</h2></br></br>
			<form  method="POST" action="index.php?id=password_proses" >
			  	<div class="form-group">
			    	<label for="username">Username</label>
			    	<input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
			  	</div>
			  	<div class="form-group">
			    	<label for="password_lama">Password Lama</label>
			    	<input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Lama">
			  	</div>
				<div class="form-group">
			    	<label for="password_baru">Password Baru</label>
			    	<input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="Masukkan Password Baru">
			  	</div>
			  	<div class="form-group">
			    	<label for="password_baru2">Konfirmasi Password Baru</label>
			    	<input type="password" class="form-control" name="password_baru2" id="password_baru2" placeholder="Masukkan Konfirmasi Password Baru">
			  	</div>
				
				<div class="form-group">
			    	<button class="btn btn-primary" type="submit" name="submit" id="submit" >Submit</button>
			    	<button class="btn btn-danger" type="reset" id="reset" >Reset</button>
			    </div>
			</form>
		</div>
	</div>
</body>
</html>