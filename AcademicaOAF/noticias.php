<?php $format=setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); ?>

<!doctype html>
<html>
<head>
<title>Briosa News | Site oficial AAC-OAF</title>
<meta charset="utf-8" />
<html lang="pt">
<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
<style>
	#header #noticias {
		border-bottom: 5px solid white;
	}

	h3 {
		text-transform: uppercase;
	}
	
	html { scroll-behavior: smooth; } 
	
	</style>

	<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
				
	</script>
	
	<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	if($id != '')
	{
	 $id=$_GET['id'];
	 ?>
	<script>
    
    window.location.hash = '<?php echo $id ?>';
    
    </script>
    <?php }else{} ?>
	

</head>
<body style="background-color: #eeeeee;">
	
<!-- Header -->
		<?php include('inc/header.php')?>
<!-- -->
	
<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
						
						<a href="editor/adicionarNoticia.php"><button type="button" class="btn btn-success">Adicionar noticia</button></a>
						
					
						<?php
						}else {
						
						} ?>
	<?php if( isset($_SESSION['tipoUtilizador'])) 
			{?>
	<form id="form1" action="noticias.php" method="post" >
  <input id="input1" type="text" name="valueToSearch" placeholder="pesquisar...">
  <button style="display:none" type="text" name="search" style="color:white"><i class="fa fa-search"></i></button>
	</form>
	<?php
	}else {
						
			} ?>
	<?php if(isset($_POST["search"])){
		
		
		
		$valueToSearch = $_POST['valueToSearch'];
		if ($valueToSearch == "")
		{
			$sql = "select * from noticias order by id desc limit 6";
			$res = mysqli_query($mysqli, $sql);
		}else{
		$sql = "select * from noticias where concat (titulo) like '%" . $valueToSearch . "%' order by id desc limit 6 ";
		$res= mysqli_query($mysqli, $sql);
		}
	}else{
		$sql = "select * from noticias order by id desc limit 6";
		$res = mysqli_query($mysqli, $sql);
	}
		if (mysqli_num_rows($res) > 0){
	
				while($row=mysqli_fetch_array($res))
							{ ?>
	<div id="<?php echo $row["id"]; ?>" class="smooth-scroll">						 
	<section id="two">
		
				<div  style=" border-radius: 25px;overflow:hidden;"class="inner">
					<article style="text-align: center;display: block;" >
						<div  class="content">
							<div class="image fit">
								<img src="editor/<?php echo $row["imagem"]; ?>" alt="" />
							</div>
						</div>
							
					</article>
					<article class="alt">
						
						<div  class="content" style="margin:0 auto width:85;">
							<header>
								<h3 style="overflow-wrap: break-word;hyphens: auto; -webkit-hyphens: auto; -ms-hyphens: auto;" ><b><?php echo $row["titulo"]; ?></b></h3>
							</header>
							
							<p style="overflow-wrap: break-word;hyphens: auto; -webkit-hyphens: auto; -ms-hyphens: auto;"><?php echo $row["texto"]; ?></p>
							
							
						
						
							<h6 style="overflow-wrap: break-word; float:right; padding-right:7%;">
							<?php
							setlocale(LC_TIME, 'pt', 'pt.utf-8', 'pt.utf-8', 'portuguese');
							
							echo strftime('%d de %B de %Y', strtotime($row["data"])); 
							
							
							?></h6>
					</div>
						
						</article>
				</div>
					<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
						<div style="text-align:center">
						<a href="editor/edicaoNoticias.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar noticia</button></a>
						<a href="editor/apagarNoticia.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar noticia</button></a>
						</div>
						<?php
						}else {
						
						} ?>
					</section>
					</div>
				<?php }
				}else{?>

					<div style="margin:0 auto; width:95%; text-align:center;">

						<div  style="width:100%;vertical-align:middle">
						<p style="padding-top:200px; padding-bottom:600px" >Desculpe, não encotrámos o seu pedido...</p>
						</div>	
							
					</div>





				<?php }

		?>	
	

		
	
	
	
<!-- Footer -->
			<?php include('inc/footer.php');?>
<!-- -->	
	
	
</body>
</html>