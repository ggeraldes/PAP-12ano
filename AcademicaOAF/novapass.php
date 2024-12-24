


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
	 <link rel="stylesheet" type="text/css" href="loginRegistar/loginRegisto.css">
	
	
<title>Nova Password | Site oficial AAC-OAF</title>



</head>
<body >
	<!-- header -->
	<?php include('inc/header.php'); ?>
    <?php 

    if(isset($_GET['vkey'])){
    $vkey=$_GET['vkey'];
    
        $resultado= "Select * from utilizadores where vkey='$vkey' limit 1";
        $result = mysqli_query($mysqli, $resultado);
        
        if (mysqli_num_rows($result)!==1) 
        {
            header("location:aac");
        }
      
      }else{
        header("location:aac");
      } 




?>
	<?php if(isset($_SESSION['tipoUtilizador'])) {
	header("location:aac");} ?>
	<!--  -->
		
	<div class="body">
	</div>
	

	<form class="login" method="post" action="novapass?vkey=<?php echo $vkey ?>">
	<div class="loginDiv">
	<h2 >Recuperação Password</h2>
		<!--Aqui encontra-se a validação de erros-->
        <?php include('loginRegistar/erros.php'); ?> 
		<div class= "input" >
			<label >Insira a nova password:</label>
			<input class="formInput" type="password" name="password1" required>
		</div>
		<div class= "input">
			<label>Insira novamente:</label>
			<input class="formInput" type="password" name="password2"  required> 
			
		</div class= "input">
        <div style="display:none;"class= "input">
			<input class="formInput" type="password" name="vkey"  value="<?php echo $vkey ?>"> 
			
		</div>
		
		<div class= "botao">
			<button class="btn" type="submit" name="guardar" style="color:white">Guardar</button>
		</div>
    <div class="entrar">
		<p > 
			Ainda não tens conta? <a href="registo">Registar</a>
		</p>
		
    <p > 
			Já tens conta? <a href="login">Entrar</a>
		</p>
	</div>

		</div>
	</form>
	</div>
	
	
	<!-- header -->
	<?php include('inc/footer.php'); ?>
	<!--  -->
	
	
</body>

</html>