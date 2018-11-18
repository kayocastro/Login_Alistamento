<!DOCTYPE html>
<html>
<head>
	<title> | Faça Login</title>

   	<!-- Bootstrap -->
   	<link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome -->
	<link rel="stylesheet" href="view/fontawesome/css/all.min.css">

	<!-- Css Bruto -->
	<link rel="stylesheet" type="text/css" href="view/css/styles.css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="view/img/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
				<!-- ICONES
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
				-->
			</div>
			<div class="card-body">
				<form action="controller/login.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" name="email" placeholder="Email" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="Senha" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Lembre-Me
					</div>
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Ainda Não Tem Conta?<a href="#">Crie Uma</a>
				</div>
				<!-- ESQUECEU A SENHA
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
				-->
			</div>
			<p style="color:#ffffff;text-align: center;">&copy; KAYO_DEVELOPER | <?php echo date("Y"); ?></p>
		</div>
	</div>
</div>
	<!-- Jquery -->
<script type="text/javascript" src="view/js/jquery.min.js"></script>
	<!-- Script Bootstrap -->
<script type="text/javascript" src="view/js/bootstrap.min.js"></script>

</body>
</html>