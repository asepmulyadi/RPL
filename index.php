<!DOCTYPE html>
<html>
	<head>
		<title>Metode Simplex</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<br/>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php
					if(isset($_GET['status'])){
				?>
				<div class="alert alert-danger" role="alert">Username dan Password <strong>Salah!</strong></div>
				<?php
					}
				?>
				
				<form class="form-horizontal" action="login.php" method="POST">
					<fieldset>
						<legend>Masukkan Akun Anda!</legend>
						<div class="form-group">
							<div class="col-lg-12">
								<input name="username" type="text" class="form-control" id="username" placeholder="Username" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</body>
</html>
