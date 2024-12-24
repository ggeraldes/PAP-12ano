<?php
	include("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}

if(isset($_POST["primeiro_nome"], $_POST["ultimo_nome"], $_POST["username"], $_POST["mail"], $_POST["password"], $_POST["tipoUtilizador"]))
{
if($_POST["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin'){
	echo "<script> alert('Não tem premissões para adicionar um administrador'); </script>";
	
}else{
 $primeiro_nome = mysqli_real_escape_string($mysqli, $_POST["primeiro_nome"]);
 $ultimo_nome = mysqli_real_escape_string($mysqli, $_POST["ultimo_nome"]);
 $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
 $mail = mysqli_real_escape_string($mysqli, $_POST["mail"]);
 $password= md5(mysqli_real_escape_string($mysqli, $_POST["password"]));
 $tipoUtilizador = mysqli_real_escape_string($mysqli, $_POST["tipoUtilizador"]);

 $nomedif = "select * from utilizadores where username= '$username'";
 if(mysqli_num_rows(mysqli_query($mysqli, $nomedif)) > 0){

	echo "<script> alert('Já existe um utilizador com esse nome'); </script>";

 }else{


 $query = "INSERT INTO utilizadores(primeiro_nome, ultimo_nome, username, mail, password, tipoUtilizador, verificacao) VALUES('$primeiro_nome', '$ultimo_nome','$username', '$mail', '$password', '$tipoUtilizador', '1')";
 if(mysqli_query($mysqli, $query))
 {
  echo 'Utilizador Inserido';
 }}
}}
?>