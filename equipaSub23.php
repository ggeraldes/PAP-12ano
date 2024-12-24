<!DOCTYPE HTML>

<html>
	<head>
		<title>Equipa Sub-23 | Site oficial AAC-OAF</title>
		<meta charset="utf-8" />
		<html lang="pt">
		<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
		<style>
				#header #equipaSub23 {
					border-bottom: 5px solid white;
				}
		</style>

	</head>
	<body style=" background-color:#eeeeee;">

		<!-- Header -->
			<?php include('inc/header.php')?>
		<!-- -->
        
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
			<a href="editor/equipaSub23/adicionarJogador.php"><button type="button" class="btn btn-success">Adicionar Jogador</button></a>
		<?php
		}else {
		} ?>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
			<a href="editor/equipaSub23/adicionarTreinador.php"><button type="button" class="btn btn-success">Adicionar Treinador</button></a>
		<?php
		}else {
		} ?>
		<div class="titulo">
		<h1 class="ht">Guarda-Redes</h1>
		</div>
		<div class="row" >
		
		<?php $sql = "select * from sub23j where posicao='guarda-redes'";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status23-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaSub23/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h" class="h"><?php echo $row["primN"]; ?></h3 >
		<h3 class="h" class="h"><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div style="text-align:center">
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaSub23/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar</button></a>
		<a href="editor/equipaSub23/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar</button></a>
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
		<?php $sql = "select * from sub23j where posicao='defesa'";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status23-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaSub23/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h"><?php echo $row["primN"]; ?></h3 >
		<h3 class="h"><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaSub23/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaSub23/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
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
		<?php $sql = "select * from sub23j where posicao='médio'";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status23-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaSub23/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h"><?php echo $row["primN"]; ?></h3 >
		<h3 class="h"><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaSub23/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaSub23/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
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
		<?php $sql = "select * from sub23j where posicao='atacante'";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status23-<?php echo $row["numero"]; ?>">
		<div class="column">
		<img src="editor/equipaSub23/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		<h4 class="hs"><?php echo $row["numero"]; ?></h4 >
		<h3 class="h"><?php echo $row["primN"]; ?></h3 >
		<h3 class="h"><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaSub23/editarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaSub23/eliminarJogador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
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
		<?php $sql = "select * from sub23t";
				$res = mysqli_query($mysqli, $sql); 
				while($row=mysqli_fetch_array($res))
							{ ?>
		<div class="pr" style="padding-top:20px;">
		<a href="status23t-<?php echo $row["id"]; ?>">
		<div class="column">
		<img src="editor/equipaSub23/<?php echo $row["foto"]; ?>">
		<div class="conteudo">
		
		<h3 class="h"><?php echo $row["primN"]; ?></h3 >
		<h3 class="h"><?php echo $row["ultiN"]; ?>‏‏‎ ‎</h3 >
		</div>
		</div>
		</a>
		<div>
		<?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
		<div style="text-align:center">
		<a href="editor/equipaSub23/editarTreinador.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-primary">Editar </button></a>
		<a href="editor/equipaSub23/eliminarTreinador.php?id=<?php echo $row["id"]; ?>"><button type="button"onclick="return confirm('tem a certeza que quer apagar?');" class="btn btn-danger">Apagar </button></a>
		</div>
		<?php
		}else {
		} ?>
		</div>
		</div>
		<?php } ?>
		</div>



		<!-- Footer -->
			<?php include('inc/footer.php')?>
		<!-- -->

   	

	</body>
</html>