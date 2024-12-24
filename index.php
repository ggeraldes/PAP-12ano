<!DOCTYPE HTML>

<html>
	<head>
		<title>Site oficial AAC-OAF</title>
		<meta charset="utf-8" />
		<html lang="pt">
		<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-MFLWLQ89V2"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-MFLWLQ89V2');
		</script>
			
	</head>
	<body style="background-color: #eeeeee">

		<!-- Header -->
			<?php include('inc/header.php')?>
		<!-- -->
		<!-- Banner -->
		<?php $res= mysqli_query($mysqli, "select * from resultados where id='1'");
			while($row=mysqli_fetch_array($res))
				{ ?>
			<style>
				#banner{
					background-image:url("editor/<?php echo $row["banner"]; ?>");
				}
			</style>
			<section  id="banner" >
				<div  class="inner">
					<div>
						<h3><?php  echo utf8_encode(ucwords(strftime('%d de %B', strtotime($row["dia"])))); ?></h3>
						<h3><?php echo $row["horario"]; ?>h</h3>
						<h4><?php echo $row["local"]; ?></h4>
					</div>
					<article>
						<div class="content">
							<img id="equipa" src="<?php echo $row["equipaC"]; ?>" alt="equipaDaCasa" ><br>
							<h1 >  <?php echo $row["equipaCt"]; ?> </h1>
						</div>
					</article>
					<article >
						<div>
							<h2> VS </h2>
						</div>
						<img id="competicao" src="<?php echo $row["competicao"]; ?>" alt="liga" >
					</article>
					<article>
						<div class="content">
							<img id="equipa" src="<?php echo $row["equipaF"]; ?>" alt="equipaDeFora"> <br>
							<h1> <?php echo $row["equipaFt"]; ?> </h1>
							</div>
							
						</article>
						<div>
						<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
						<a href="editor/edicaoBanner.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar Banner</button></a>
					<?php
						}else {
						} ?>
					</div>
				</div>
				
			</section>
				<?php
				}
				?>
		<!-- Primeira Parte -->
					<section id="three">
						<div class="inner">
							<article class="leftRight1">
								<?php $res= mysqli_query($mysqli, "select * from resultados where id='2'");
									while($row=mysqli_fetch_array($res))
									{ ?>
									<style>
									#three .inner .leftRight1{
										background:
        								linear-gradient(
          								rgba(0, 0, 0, 0.7), 
          								rgba(0, 0, 0, 0.7) ),
										url("editor/<?php echo $row["banner"]; ?>");
									}
									</style>
								<div  style="text-align:center;"> 
									<img id="competicao" src="<?php echo $row["competicao"]; ?>" alt="liga" >
									<p style="color:white;"><?php echo $row["horario"]; ?>h, <?php echo utf8_encode(ucwords(strftime('%d de %B', strtotime($row["dia"]))));?>, <?php echo $row["local"]; ?> </p>
								</div>
								<div class="threeS" >
									<img id="equipas" src="<?php echo $row["equipaC"]; ?>" alt="equipaDeCasa" > 
									<h1> <?php echo $row["equipaCt"]; ?> </h1>
								</div >
								<div class="threeS" >
									<h2 style="display: inline-block;"> <?php echo $row["goloC"]; ?> </h2>
									<h2 style="display: inline-block;"> - </h2>
									<h2 style="display: inline-block;"> <?php echo $row["goloF"]; ?> </h2>
									<h2 >  vs  </h2>
								</div>
								<div class="threeS" > 
									<img  id="equipas" src="<?php echo $row["equipaF"]; ?>" alt="equipaDeFora" >
									<h1 > <?php echo $row["equipaFt"]; ?> </h1>
								</div>
								<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
										<a href="editor/ultimoJogo.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar Jogo</button></a>
									<?php
										}else {
										} ?>
									<?php
									}
									?>
							</article>
							<article class="comp">
								<div class="content">
									<!-- CLASSIFICAÇÃO -->
									<?php include('inc/classificacao.php')?>
									<!-- -->
								</div>
							</article>
							<article class="leftRight2">
								<?php $res= mysqli_query($mysqli, "select * from resultados where id='3'");
									while($row=mysqli_fetch_array($res))
									{ ?>
									<style>
									#three .inner .leftRight2{
										background:
        								linear-gradient(
          								rgba(0, 0, 0, 0.7), 
          								rgba(0, 0, 0, 0.7) ),
										url("editor/<?php echo $row["banner"]; ?>");
									}
									</style>
								<div  style="text-align:center;"> 
									<img id="competicao" src="<?php echo $row["competicao"]; ?>" alt="liga" >
									<p style="color:white;"><?php echo $row["horario"]; ?>h, <?php echo utf8_encode(ucwords(strftime('%d de %B', strtotime($row["dia"])))); ?>, <?php echo $row["local"]; ?> </p>
								</div>
								<div class="threeS" >
									<img id="equipas" src="<?php echo $row["equipaC"]; ?>" alt="equipaDeCasa" > 
									<h1> <?php echo $row["equipaCt"]; ?> </h1>
								</div >
								<div class="threeS" >
									<h2 style="vertical-align:middle">  vs  </h2>
								</div>
								<div class="threeS" > 
									<img  id="equipas" src="<?php echo $row["equipaF"]; ?>" alt="equipaDeFora" >
									<h1 > <?php echo $row["equipaFt"]; ?> </h1>
								</div>
								<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
										<a href="editor/edicaoBanner.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar Jogo</button></a>
									<?php
										}else {
										} ?>
									<?php
									}
									?>
							</article>
							
						</div>
					</section>

		<!-- Two -->
			<section id="two1">
				<div class="inner">
				<?php $res= mysqli_query($mysqli, "select * from noticias order by id desc limit 1");
							while($row=mysqli_fetch_array($res))
							{ ?>
							
					<article class="esquerda">
					
							<div class="image fit">
								<img src="editor/<?php echo $row["imagem"]; ?>" alt="" />
							</div>
							<h3 style="overflow-wrap: break-word;" ><?php echo $row["titulo"]; ?></h3>
							<div>
								<a href="noticias-<?php echo $row["id"]; ?>">Saiba mais...</a>
							</div>
						
						
					</article>
					
					<?php
						}
						?>
						<?php $res= mysqli_query($mysqli, "select * from noticias order by id desc limit 1,1");
							while($row=mysqli_fetch_array($res))
							{ ?>
							
					<article class="direita">
					
							<div class="image fit">
								<img src="editor/<?php echo $row["imagem"]; ?>" alt="" />
							</div>
							<h3 style="overflow-wrap: break-word;" ><?php echo $row["titulo"]; ?></h3>
							<div>
								<a href="noticias-<?php echo $row["id"]; ?>">Saiba mais...</a>
							</div>	
						
					</article>
					<?php
						}
						?>
						
				</div>
			</section>

		<!-- Three -->
			<section id="three1">
				<div class="inner">
					<article >
					
					
					<div style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);" class="image fit">
					<a href="https://loja.academica-oaf.pt/collections/equipamentos-submeny/products/camisola-oficial-preta-academica-2020-2021" target="_blank"><img src="images/camisola.jpg" alt="" /></a>
					</div>
					
				
			</article>
						
					<article>
					<div class="content">
					<a class="twitter-timeline" href="https://twitter.com/academicaoaf" data-tweet-limit="1" data-width="300" data-align="left" data-chrome="nofooter noheader" ></a>
					<script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
					
						</div>
					</article>
					<article>
					
					<div style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);" class="image fit">
					<a href="https://loja.academica-oaf.pt/collections/equipamentos-submeny/products/camisola-oficial-academica-2020-2021-branca" target="_blank"><img src="images/camisola2.jpg" alt="" /></a>
					</div>
					
					</article>
				</div>
			</section>

		<!-- Footer -->
			<?php include('inc/footer.php')?>
		<!-- -->

		

	</body>
</html>