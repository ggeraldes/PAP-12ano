<!DOCTYPE HTML>

<html>
	<head>
		<title>Perfil | Site oficial AAC-OAF</title>
		<meta charset="utf-8" />
		<html lang="pt">
		<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
		<style>
				#header #perfil{
					border-bottom: 5px solid white;
				}
				.imagemDiv1{
					background-image: "admin/<?php echo $_SESSION['foto']; ?>";
				}
		</style>
<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
		<script>
			function myFunction(){
						var x = document.getElementById("back");
						
						if (x.style.display === "none") {
							$("#back").slideToggle(1500);
						
						} else {
							$("#back").slideToggle(1500);
						
						
						}
						}
			
		
					 
				
		</script>
		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
		</script>
	</head>
	<body style="background-color: #eeeeee">

		<!-- Header -->
			<?php include('inc/header.php')?>
		<!-- -->
		<?php 
		$incorreto="";
		
		if($_SESSION['numero'] == 0){
			$numero = '';
		}else{
			$numero = $_SESSION['numero'];
		}


        if(isset($_SESSION['username']) ) {
    
    
        $resultado= "Select * from utilizadores where username='$username' limit 1";
        $result = mysqli_query($mysqli, $resultado);
        
       
    
      }else{
        header("location:error404/index.html");
      } 
	  
	  if($_SESSION['tipoUtilizador'] == 'admin' || $_SESSION['tipoUtilizador'] == 'adminP'){?>

		<div style="margin:0 auto; text-align:center; width:50%; padding-top:300px;padding-bottom:300px">
		<a href="admin/adminPanel.php"><button type="button" class="btn btn-primary">Painel de Administrador</button></a>
		<a href="admin/chatAdmin/chatAdmin.php"><button type="button" class="btn btn-primary">Mensagens</button></a>
		<a href="admin/enviarEmails.php"><button type="button" class="btn btn-primary">Enviar Emails</button></a>
		<a href="ficheiros"><button type="button" class="btn btn-primary">Ficheiros</button></a>
		
	  </div>

	 <?php }
	 
	 elseif($_SESSION['tipoUtilizador'] == 'editor'){

		header("location:aac");

	 }

	 elseif($_SESSION['tipoUtilizador'] == 'normal'){
	 
	 ?>


		<div class="totalPerfil">
			<div class="partePerfil" >
				<div class="partePerfilDiv1">
					<h1><?php echo $_SESSION['primeiroNome']; ?></h1>
					<h1> <?php echo $_SESSION['ultimoNome']; ?></h1>
				</div>
				<a href="https://loja.academica-oaf.pt/pages/novos-socios-opcoes" target="_blank"><button class="botao1Perfil">Tornar-me Sócio</button></a>

				<div class="imagemDiv1">
				<style>	
					.imagem{
						background-image: url("admin/<?php echo $_SESSION['foto']; ?>");
					}
				</style>
	 				<div class="imagem"> </div>
	 			</div>
			
					<div style="padding-top:10%; ">
					<form action="" method="post" enctype="multipart/form-data" class="formSelect">

						<label>Selecione um número:</label>
						<select name="option" class = "selectNumero"> 
							<?php
							for ($i=1; $i<=99; $i++)
							{
								?>
									<option <?php if($_SESSION['numero'] == $i) {echo "selected";} ?> value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php
							}
							?>
						</select>
						<button name="select"><svg style="vertical-align:middle" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1ba500"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg></button>
					</form>
					</div>
				
	 		</div>
			<div class="partePerfil1" >
				<img class="imagemCamisola" src="images/camisolaPerfil.png">
				<div class="spanDivPerfil1">
					<span><h2><?php echo $_SESSION['username']; ?></h2></span>
	 			</div>
				 <div class="spanDivPerfil2">
					<span><h2><?php echo $numero; ?></h2></span>
				</div>
				<div class="spanDivPerfil3">
				<a href="https://loja.academica-oaf.pt/products/camisola-personalizada-da-academica?_pos=2&_sid=449ccc0b6&_ss=r"><button>Comprar</button></a>
				</div>
				
	 		</div>
			<div class="partePerfil2" >
				<div class="partePerfil2Div">
					<div>
						<a href="aac?logout='1'"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ff0008"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg>
						<button class="bt1Perfil">Terminar Sessão</button></a>
	 				</div>
					 <div>
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
					<button onclick=" myFunction()">Editar Perfil</button>
					</div>
					<form action="" method="post" enctype="multipart/form-data" id="back" >
						<div class="form-group">
							<label for="">Primeiro Nome</label>
							<input type="text" class="form-control" name="pNome" value="<?php echo $_SESSION['primeiroNome'] ?>" style="text-transform: capitalize;">
						</div>
						<div class="form-group">
							<label for="">Último Nome</label>
							<input type="text" class="form-control" name="uNome" value="<?php echo $_SESSION['ultimoNome'] ?>" style="text-transform: capitalize;">
						</div>
						<div class="fotoDivPerfil">
							<label class="labelFoto">Foto
							<input type="file" class="form-control input" name="foto">
							</label>
						</div>
						<div class="atualizar">		
							<button class="botao" name="atualizar">Atualizar</button>
	 					</div>
					</form>
					<?php echo  $incorreto ?>
				</div>
					
	 		</div>
	 	</div>

	  







	<?php } ?>
		<!-- Footer -->
			<?php include('inc/footer.php')?>
		<!-- -->

		

	</body>

	<?php 
	if(isset($_POST["atualizar"])){
		
		
		$tm=md5(time());
		$fnm=$_FILES["foto"]["name"];
		$pNome = $mysqli -> real_escape_string( $_POST['pNome']);
		$uNome = $mysqli -> real_escape_string($_POST['uNome']);
		$id = $_SESSION['idUtilizador'];

        if($fnm==""){
			if ( preg_match("#[0-9]+#", $pNome) || preg_match("#[0-9]+#", $uNome) || preg_match("/\W/", $pNome) || preg_match("/\W/", $uNome) || strlen($pNome) < 2 || strlen($uNome) < 2 || strlen($pNome) > 14 || strlen($uNome) > 14) {
				$incorreto = "O primerio e último nome só devem conter letras (2-14)"; //adiciona um erro a 'erros' 
			}else{

				$sql = "update utilizadores set primeiro_nome= '$pNome', ultimo_nome= '$uNome' where id_utilizador='$id'";
				mysqli_query($mysqli, $sql);
				$_SESSION['primeiroNome'] =  strip_tags($pNome);
				$_SESSION['ultimoNome'] =  strip_tags($uNome);

			}
        }
		else{
			if ( preg_match("#[0-9]+#", $pNome) || preg_match("#[0-9]+#", $uNome) || preg_match("/\W/", $pNome) || preg_match("/\W/", $uNome) || strlen($pNome) < 2 || strlen($uNome) < 2 || strlen($pNome) > 14 || strlen($uNome) > 14) {
				array_push($incorreto, "O primerio e último nome só devem conter letras (2-14)"); //adiciona um erro a 'erros' 
			}else{

				$dst="./admin/fotosUtilizadores/".$tm.$fnm;
				$dst1="fotosUtilizadores/".$tm.$fnm;
				move_uploaded_file($_FILES["foto"]["tmp_name"], $dst);
			
				$sql = "update utilizadores set primeiro_nome = '$pNome', ultimo_nome = '$uNome', foto = '$dst1' where id_utilizador='$id'";
				mysqli_query($mysqli, $sql);

				$_SESSION['primeiroNome'] = $pNome;
				$_SESSION['ultimoNome'] = $uNome;
				$_SESSION['foto'] = $dst1;
		}
        }?>

		<script>window.location='perfil'</script>

	<?php }

	if(isset($_POST["select"])){
		
		

		$numero = $mysqli -> real_escape_string( $_POST['option']);
		$id = $_SESSION['idUtilizador'];

			if ($_POST['option'] >= 100 || $_POST['option'] <= 0 )
			{

			}else{

			
			
				$sql = "update utilizadores set numero = '$numero' where id_utilizador='$id'";
				mysqli_query($mysqli, $sql);

				$_SESSION['numero'] = $numero;

			}
				
        ?>

		<script>window.location='perfil'</script>

	<?php } ?>
</html>