<?php
	include("../../../loginRegistar/servidor.php");


if(! isset($_SESSION['idUtilizador']) || $_SESSION['tipoUtilizador']== 'normal' || $_SESSION['tipoUtilizador']== 'editor' ){
	header("location:../../error404/index.html");
}

if(isset($_POST['incoming_id'])){
$mensagem = mysqli_real_escape_string($mysqli, $_POST['mensagem']);
$idRecebeu = mysqli_real_escape_string($mysqli, $_POST['incoming_id']);
echo $mensagem;

if(!empty($mensagem)){
	$data=date("Y-m-d H:i:s");
	$sql = mysqli_query($mysqli, "insert into chat (idEnviou, idRecebeu, mensagem) values ('1', '$idRecebeu', '$mensagem')");
	$sql1 = mysqli_query($mysqli, "update utilizadores set ultimaMsg='1', dataChat='$data'  where id_utilizador='$idRecebeu'");
	
}
}

?>
