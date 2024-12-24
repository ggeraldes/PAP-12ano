<?php

	include("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}

$estado="";
$id=$_GET["id"];
$res=mysqli_query($mysqli, "select * from utilizadores where id_utilizador='$id'");

while($row=mysqli_fetch_array($res))
{
	if($row['tipoUtilizador'] == 'adminP' || $row['tipoUtilizador'] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin')
	{
		echo "<script> alert('Não tem premissões para mudar o estado de um administrador'); </script>";

	}else{
		if($row['tipoUtilizador'] == 'adminP' && $_SESSION['tipoUtilizador'] == 'adminP'){ 

			echo "<script> alert('Não tem premissões para se apagar'); </script>"; 
			
		}else{
	$estado=$row["estado"];
	if($estado=="ativo")
	{
		mysqli_query($mysqli, "update utilizadores set estado= 'inativo' where id_utilizador='$id'");
	}
	else{
		mysqli_query($mysqli, "update utilizadores set estado= 'ativo' where id_utilizador='$id'");
	}}
}}


?>

<script type="text/javascript">
	window.location="adminPanel.php";
	
</script>