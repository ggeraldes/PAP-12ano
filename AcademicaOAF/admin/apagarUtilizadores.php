<?php	include("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}

$id=$_GET["id"];
mysqli_query($mysqli, "delete from utilizadores where id_utilizador=$id");

?>

<script type="text/javascript">
	window.location="adminPanel.php";
	
</script>