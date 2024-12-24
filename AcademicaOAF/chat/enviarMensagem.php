<?php
	include("../loginRegistar/servidor.php");


if(! isset($_SESSION['idUtilizador'])){
	header("location:../error404/index.html");
}

if(isset($_POST["mensagem"])){
$mensagem = mysqli_real_escape_string($mysqli, $_POST['mensagem']);
$idEnviou = $_SESSION['idUtilizador'];

if(!empty($mensagem) || $mensagem == ""){
	$data=date("Y-m-d H:i:s");
	$sql = mysqli_query($mysqli, "insert into chat (idEnviou, idRecebeu, mensagem) values ('$idEnviou', '1', '$mensagem')");
	$sql1 = mysqli_query($mysqli, "update utilizadores set ultimaMsg='2', dataChat = '$data' where id_utilizador='$idEnviou'");
}
}
?>
