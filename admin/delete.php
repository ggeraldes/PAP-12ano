<?php	
include("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}


if(isset($_POST["id"]))
{
$sql = "Select * from utilizadores where id_utilizador = '".$_POST["id"]."'";
$query1 = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query1);


if($row['tipoUtilizador'] == 'adminP' || $row['tipoUtilizador'] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin'){

    echo "<script> alert('Não tem premissões para apagar um administrador'); </script>";

}else{
    if($row['tipoUtilizador'] == 'adminP' && $_SESSION['tipoUtilizador'] == 'adminP'){ 

        echo "<script> alert('Não tem premissões para se apagar'); </script>"; 
        
    }else{
 $query = "DELETE FROM utilizadores WHERE id_utilizador = '".$_POST["id"]."'";
 if(mysqli_query($mysqli, $query))
 {
  echo 'Utilizador Apagado';
 }}
}}
?>