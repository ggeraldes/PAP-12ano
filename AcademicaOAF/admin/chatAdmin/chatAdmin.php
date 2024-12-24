<?php 
include ("../../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../../error404/index.html");
	
}
?>
<html>
 <head>
  <title>AAC/OAF - MENSAGENS</title>
  
  
 
 
 </head>
 <?php include_once "header.php"; ?>
 
<body>

  <div class="wrapper">
  <a href="../../perfil" ><button type="button" style="background-color:black; color:white; border-radius:5px" >Voltar</button></a>
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($mysqli, "SELECT * FROM utilizadores WHERE id_utilizador = {$_SESSION['idUtilizador']}");
            
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../<?php echo $row['foto']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['username']?></span>
          </div>
        </div>
        
      </header>
      <div class="search">
        <span class="text">Selecione alguém para falar</span>
        <input type="text" placeholder="Insira o nome que deseja...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="assets/utilizadores.js"></script>

</body>
</html>


