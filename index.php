<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Presensi Bimbingan Belajar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/depan.css" rel="stylesheet" type="text/css">
	<script type="text/javasript" src="js/bootstrap.min.js"></script>
	<script type="text/javasript" src="js/bootstrap.js"></script>
	<script type="text/javasript" src="js/depan.js"></script>
</head>
<body>
 


<div class="container">

<div class="row" style="margin-top:20px">
	<div class="col-md-12 header">
		<h1 class="text-muted"><center>Sistem Presensi Bimbingan Belajar</center></h1>
	</div>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 panel panel-info">
		<form role="form" method="POST" action="verifikasi.php">
			<fieldset>
				<h2>Silahkan Login</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="username" name="username" id="username" class="form-control input-lg" placeholder="Username" autofocus="autofocus">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<div class="form-group">
                    <select name="status" id="status" class="form-control input-lg">
				        <option value="#">-- Login Sebagai --</option>
				        <option value="admin">Admin</option>
				        <option value="tentor">Tentor</option>
				        <option value="siswa">Siswa</option>
				    </select>
				</div>


				
				

				<hr class="colorgraph">
				<div class="row jarak">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Login" name="submit">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						 <input type="reset" class="btn btn-lg btn-primary btn-block" value="Reset">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>


    
  
</body>
</html>