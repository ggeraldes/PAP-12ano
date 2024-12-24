<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
	 <link rel="stylesheet" type="text/css" href="loginRegistar/loginRegisto.css">
	
	
<title>Recuperar Password | Site oficial AAC-OAF</title>
<style> 
.recuperar{
    background-color: #fff;
  background-color: rgba(175, 175, 175, 0.8);
color: black;
font-weight: bold;
position: absolute;
bottom: 50%;
left: 50%;
transform: translate(-50%, -50%);
z-index: 2;
width: 30%;
padding: 20px;
text-align: left;
border-radius: 10px;
-webkit-box-shadow: 7px 7px 40px -25px rgb(166 166 166);
-moz-box-shadow: 7px 7px 40px -25px rgba(166, 166, 166, 1);
box-shadow: 7px 7px 40px -25px rgb(166 166 166);
}

.recuperarDiv {

margin:0 auto;
width: 95%;
}
.recuperar .input {
  width: 100%;
  padding-bottom: 5px;
  
}

.recuperar .formInput {
  width: 100%;
  padding-left: 10px;
  background-color: rgb(255, 255, 255);
  border: none;
  
}
.recuperar .botao {
  padding-top: 10px;
  text-align: center;
  height:70px;
}

.recuperar .btn {
  width: 30%;
  border-radius: 30px;
  background-color: rgb(31, 31, 31);
  color: white;
  height:50px;
  border: none;
}
.recuperar label {
  font-weight: normal;
  font-size: 15px;
}

@media screen and (max-width: 1200px) {
    .recuperar{
        bottom: 55%;
        width: 60%;
    }
    
}
@media screen and (max-width: 905px) {
    .recuperar{
        bottom: 55%;
        width: 50%;
    }
    
}
@media screen and (max-width: 900px) {
    .recuperar{
        bottom: 60%;
    }

}
@media screen and (max-width: 736px) {
    .recuperar{
        bottom: 40%;
        width: 100%;
    }
    
}
.botao {
  padding-top: 10px;
  text-align: center;
  height:70px;
}
.btn:hover {
  background-color: rgb(63, 63, 63);
}


</style>	
</head>

<body >
	<!-- header -->
	<?php include('inc/header.php'); ?>
	<?php if(isset($_SESSION['tipoUtilizador'])) {
	header("location:aac");} ?>
	<!--  -->
		
	<div class="body">
	</div>
	

	<form class="recuperar" method="post" action="recuperar">
	
		<div class="recuperarDiv">
	
		<!--Aqui encontra-se a validação de erros-->
		<?php include('loginRegistar/erros.php'); ?> 
		<div class= "input" >
			<label >Insira o seu email:</label>
			<input class="formInput" type="email" name="email" required>
		</div>

		
		<div class= "botao">
			<button class="btn" type="submit" name="recuperar" style="color:white">Enviar</button>
		</div>
		</div>
	</form>
	
	
	
	<!-- header -->
	<?php include('inc/footer.php'); ?>
	<!--  -->
	
	
</body>


</html>