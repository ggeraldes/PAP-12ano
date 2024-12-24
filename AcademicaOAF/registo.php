<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registo | Site oficial AAC-OAF</title>
	<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="loginRegistar/loginRegisto.css">
	<style>
				#header #registo {
					border-bottom: 5px solid white;
				}
		</style>
	
</head>


<body>

		<!-- header -->
	<?php include('inc/header.php'); ?>
	<?php if(isset($_SESSION['tipoUtilizador'])) {
	header("location:aac");} ?>
	<!--  -->
	
	
	
	<div class="body">
	</div>
	
	
	<form class="registar" method="post" action="registo">
		<!--Aqui encontra-se a validação de erros-->
		<div class="registo">
			<h2 >Registar</h2>
			
				<?php include('loginRegistar/erros.php'); ?> 
		
			<div  class= "inputMail">
				<label>Nome de utilizador</label>
				<input class="formInput" style="box-sizing: none;" type="text" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div  class= "input">
				<label>Primeiro Nome</label>
				<input class="formInput" type="text" name="primeiroNome" value="<?php echo $primeiroNome; ?>" style="text-transform: capitalize;" required>
			</div>
			<div  class= "input">
				<label>Último Nome</label>
				<input class="formInput" type="text" name="ultimoNome" value="<?php echo $ultimoNome; ?>" style="text-transform: capitalize;" required>
			</div>
			<div  class= "inputMail">
				<label>Email</label>
				<input class="formInput" type="email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div  class= "input">
				<label>Palavra-Passe</label>
				<input class="formInput" type="password" name="password_1" required>
			</div>
			<div  class= "input">
				<label>Confirmar Palavra-Passe</label>
				<input class="formInput" type="password" name="password_2" required>
			</div>
			
			<div class="botao">
				<button class="btn" type="submit" name="registar" style="color:white">Registar</button>
			</div>
				<p class="entrar"> 
			Já tens conta? <a href="login">Entrar</a>
			</p>
	
		</div>
	</form>

	<!-- header -->
	<?php include('inc/footer.php'); ?>
	
	
	
	
</body>
</html>