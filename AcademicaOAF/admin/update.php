<?php
	include("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}
if(isset($_POST["id"]))
{
    
 $value = mysqli_real_escape_string($mysqli, $_POST["value"]);
 $query1 = mysqli_query($mysqli, "Select * from utilizadores where ".$_POST["column_name"]."='".$value."' and id_utilizador = '".$_POST["id"]."'");

if($_POST["column_name"] == "tipoUtilizador" && $value != "admin" && $value != "normal" && $value != "editor") {
    ?> <script> alert('O utilizador tem de ser do tipo: normal, editor ou admin') </script> <?php
}else{
    
 if($_POST["column_name"] == "tipoUtilizador" && $value == "admin" && $_SESSION['tipoUtilizador'] == 'admin' || $_POST["column_name"] == "tipoUtilizador" && $value == "adminP" && $_SESSION['tipoUtilizador'] == 'adminP'){

    echo "<script> alert('Não pode editar para um utilizador do seu tipo ou superior'); </script>";
    
}else{

 if(mysqli_num_rows($query1) == 0){

if($_POST["column_name"] == "password"){

 $value1= md5($value);
 $query = "UPDATE utilizadores SET ".$_POST["column_name"]."='".$value1."' WHERE id_utilizador = '".$_POST["id"]."'";

}else{

    $query = "UPDATE utilizadores SET ".$_POST["column_name"]."='".$value."' WHERE id_utilizador = '".$_POST["id"]."'";

}

 if(mysqli_query($mysqli, $query))

 {

  echo 'Utilizador atualizado';
  
 }
}else{
    ?> <script> alert('Não foi feita nenhuma alteração') </script> <?php
}
}}}
?>