
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
	 <link rel="stylesheet" type="text/css" href="loginRegistar/loginRegisto.css">
	 <style>
				#header #login {
					border-bottom: 5px solid white;
				}
		</style>
	
<title>Login | Site oficial AAC-OAF</title>
	<script>
		//mostrar password
		function showPass() {
  			var x = document.getElementById("pass");
  			if (x.type === "password") {
    		x.type = "text";
  			} else {
    		x.type = "password";
  			}
}
	</script>
</head>

<body >
	<!-- header -->
	<?php include('inc/header.php'); ?>
	<?php if(isset($_SESSION['tipoUtilizador'])) {
	header("location:aac");} ?>
	<!--  -->
		
	<div class="body">
	</div>
	

	<form class="login" method="post" action="login">
		<div class="loginDiv">
		<h2 >Login</h2>
	
		<!--Aqui encontra-se a validação de erros-->
		<?php include('loginRegistar/erros.php'); ?> 
		<div class= "input" >
			<label>Nome de utilizador</label>
			<input class="formInput" type="text" name="username" required>
		</div>
		<div class= "input">
			<label>Password</label>
			<input class="formInput" id="pass" type="password" name="password"  required> 
			<br>
			<input type="checkbox" class="showPass" onclick="showPass()"> <label class="mp">Mostrar Password</label>
			
		</div>
		<div class= "botao">
			<button class="btn btn-submit" type="submit" name="login" style="color:white">Entrar</button>
		</div>
		<div class="entrar">
		<p > 
			Ainda não tens conta? <a href="registo">Registar</a>
		</p>
		
			<a href="recuperar">Recuperar password</a>
	</div>
		
	</div>
	</form>
	</div>
	
	
	<!-- header -->
	<?php include('inc/footer.php'); ?>
	<!--  -->
	
	
</body>

</html>