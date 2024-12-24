<!DOCTYPE HTML>

<html>
	<head>
		<title>Equipa Profissional | Site oficial AAC-OAF</title>
		<meta charset="utf-8" />
		<html lang="pt">
		<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
		<style>
				#header #equipaPro {
					border-bottom: 5px solid white;
				}
		</style>
	</head>
	<body style=" background-color:#eeeeee;">

		<!-- Header -->
			<?php include('inc/header.php');?>
		<!-- -->
        
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
			<a href="editor/equipaP/adicionarJogador.php"><button type="button" class="btn btn-success">Adicionar Jogador</button></a>
		<?php
		}else {
		} ?>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
			<a href="editor/equipaP/adicionarTreinador.php"><button type="button" class="btn btn-success">Adicionar Treinador</button></a>
		<?php
		}else {
		} ?>
		<div class="titulo">
		<h1 class="ht">Guarda-Redes</h1>
		</div>
		<div class="row" >
		
		<?php $sql = "select * from equipaproj where posicao='guarda-redes' order by numero asc";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		
		<div class="pr" style="padding-top:20px;">
		<a href="status-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaP/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		
		<h3 class="h" ><?php echo $row["primN"]; ?></h3 >
		<h3 class="h" ><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div style="text-align:center">
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaP/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
		<a href="editor/equipaP/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar</button></a>
		</div>
		
		<?php
		}else {
		} ?>
		</div>
		</div>
		
		<?php } ?>
		</div>
		<div class="titulo">
		<h1>Defesas</h1>
		</div>
		<div class="row" >
		<?php $sql = "select * from equipaproj where posicao='defesa' order by numero asc";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaP/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h" ><?php echo $row["primN"]; ?></h3 >
		<h3 class="h" ><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaP/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaP/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
		</div>
		<?php
		}else {
		} ?>
		</div>
		</div>
		<?php } ?>
		</div>
		<div class="titulo">
		<h1>Médios</h1>
		</div>
		<div class="row" >
		<?php $sql = "select * from equipaproj where posicao='médio' order by numero asc";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaP/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h" ><?php echo $row["primN"]; ?></h3 >
		<h3 class="h" ><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaP/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaP/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
		</div>
		<?php
		}else {
		} ?>
		</div>
		</div>
		<?php } ?>
		</div>
		<div class="titulo">
		<h1>Atacantes</h1>
		</div>
		<div class="row" >
		<?php $sql = "select * from equipaproj where posicao='atacante' order by numero asc";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaP/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h" ><?php echo $row["primN"]; ?></h3 >
		<h3 class="h" ><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaP/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaP/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
		</div>
		<?php
		}else {
		} ?>
		</div>
		</div>
		<?php } ?>
		</div>
		<div class="titulo">
		<h1>Treinadores</h1>
		</div>
		<div class="row" >
		<?php $sql = "select * from equipaprot";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="statust-<?php echo $row["id"]; ?>">
		<div class="column">
		<img src="editor/equipaP/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		
		<h3 class="h" ><?php echo $row["primN"]; ?></h3 >
		<h3 class="h" ><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaP/editarTreinador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaP/eliminarTreinador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
		</div>
		<?php
		}else {
		} ?>
		</div>
		</div>
		<?php } ?>
		</div>



		<!-- Footer -->
			<?php include('inc/footer.php');?>
		<!-- -->

   	

	</body>
</html>