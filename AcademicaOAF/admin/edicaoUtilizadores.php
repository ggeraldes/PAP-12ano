<?php include "../loginRegistar/servidor.php" ;

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}

	$id=$_GET["id"];

	$username="";
	$primeiroNome="";
	$ultimoNome="";
	$email="";
	$password="";
	$foto="";

	$res=mysqli_query($mysqli, "select * from utilizadores where id_utilizador=$id");
	while($row=mysqli_fetch_array($res))
	{
		$username=$row["username"];
		$primeiroNome=$row["primeiro_nome"];
		$ultimoNome=$row["ultimo_nome"];
		$email=$row["mail"];
		$foto=$row["foto"];
		$tipoUtilizador=$row["tipoUtilizador"];
	}
	if($tipoUtilizador=="adminP" && $_SESSION['tipoUtilizador'] == 'admin'){
		header("location:../error404/index.html");
	}
	if($tipoUtilizador=="admin" && $_SESSION['tipoUtilizador'] == 'admin'){
		header("location:../error404/index.html");
	}

	
	

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class ="col-lg-4"> 
  <h2>Basic form</h2>
  <form action="" name= "form1" method= "post" enctype="multipart/form-data">
	  
	  <img src="<?php echo $foto; ?>" height="100" width="100">
	   <div class="form-group">
      <label for="email">Username</label>
      <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?php echo $username; ?>">
    </div>
	   <div class="form-group">
      <label for="email">Primeiro Nome</label>
      <input type="text" class="form-control" id="primeiroNome" placeholder="primeiro nome" name="primeiroNome" value="<?php echo $primeiroNome; ?>">
    </div>
	<div class="form-group">
      <label for="email">Ultimo Nome</label>
      <input type="text" class="form-control" id="ultimoNome" placeholder="ultimo nome" name="ultimoNome" value="<?php echo $ultimoNome; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Imagem</label>
      <input type="file" class="form-control"  name="foto" >
    </div>
	<div class="form-group">
	 	<label for="cars">Tipo de utilizador:</label>
		 <select id="tipoUtilizador" name="tipoUtilizador">
		 	<?php if($_SESSION['tipoUtilizador'] == 'adminP'){ ?>
			<option value="<?php echo $tipoUtilizador; ?>"><?php echo $tipoUtilizador; ?></option>
			<?php if($tipoUtilizador=="admin"){?>
  			<option value="normal">normal</option>
			<option value="editor">editor</option>
			</select>
			<?php }elseif($tipoUtilizador=="editor"){?>
  			<option value="normal">normal</option>
			<option value="admin">admin</option>
			</select>
			<?php }elseif($tipoUtilizador=="normal"){?>
			<option value="editor">editor</option>
			<option value="admin">admin</option>
			</select>
			<?php } 
			} else { ?>
			<option value="<?php echo $tipoUtilizador; ?>"><?php echo $tipoUtilizador; ?></option>
			<?php if($tipoUtilizador=="editor"){?>
  			<option value="normal">normal</option>
			</select>
			<?php }elseif($tipoUtilizador=="normal"){?>
			<option value="editor">editor</option>
			</select>
			<?php }} ?>
  		

			 
	 <br>
	 <br>
    
	 <button type="submit" name="update" onclick="return confirm('tem a certeza que quer efetuar as alterações?');" class="btn btn-default" >Update</button>
	 
  </form>
</div>
</div>
	
	

	
</body>
	

	
	<?php 
	if(isset($_POST["update"]))
	{
		
		$tm=md5(time());
		$fnm=$_FILES["foto"]["name"];
		
		
		
		if($fnm=="")
		{
			mysqli_query($mysqli, "update utilizadores set username= '$_POST[username]', tipoUtilizador= '$_POST[tipoUtilizador]', primeiro_nome= '$_POST[primeiroNome]', ultimo_nome= '$_POST[ultimoNome]', mail= '$_POST[email]' where id_utilizador=$id");
		}
		else
		{
			$dst="./fotosUtilizadores/".$tm.$fnm;
			$dst1="fotosUtilizadores/".$tm.$fnm;
			move_uploaded_file($_FILES["foto"]["tmp_name"], $dst);
			mysqli_query($mysqli, "update utilizadores set username= '$_POST[username]', tipoUtilizador= '$_POST[tipoUtilizador]', primeiro_nome= '$_POST[primeiroNome]', ultimo_nome= '$_POST[ultimoNome]', mail= '$_POST[email]', foto='$dst1' where id_utilizador=$id");
		}
			
		
	?>
	
		<script type="text/javascript">
		window.location="adminPanel.php";
	
	</script>
	
	<?php
	}
	?>
	
</html>