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
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($mysqli, $_GET['idUtilizador']);
          $sql = mysqli_query($mysqli, "SELECT * FROM utilizadores WHERE id_utilizador = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location:../../error404/index.html");
          }
        ?>
        <a href="chatAdmin.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../<?php echo $row['foto']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['username']?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $row['id_utilizador'] ?>" hidden>
        <input type="text" name="mensagem" class="input-field" placeholder="Escreva a mensagem aqui..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="assets/chat.js"></script>


</body>
</html>



