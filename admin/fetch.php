<?php
//fetch.php
	include("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}
$columns = array('id_utilizador', 'primeiro_nome', 'ultimo_nome', 'mail', 'password', 'tipoUtilizador', 'estado' );

$query = "SELECT * FROM utilizadores ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE id_utilizador LIKE "%'.$_POST["search"]["value"].'%" 
 OR primeiro_nome LIKE "%'.$_POST["search"]["value"].'%" 
 OR ultimo_nome LIKE "%'.$_POST["search"]["value"].'%" 
 OR username LIKE "%'.$_POST["search"]["value"].'%" 
 OR mail LIKE "%'.$_POST["search"]["value"].'%" 
 OR tipoUtilizador LIKE "%'.$_POST["search"]["value"].'%" 
 OR estado LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id_utilizador DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($mysqli, $query));

$result = mysqli_query($mysqli, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-column="id_utilizador">' . $row["id_utilizador"] . '</div>';

 if($row["id_utilizador"] == $_SESSION['idUtilizador'] ||  $row["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin' || $row["tipoUtilizador"] == 'adminP' && $_SESSION['tipoUtilizador'] == 'admin'){

	
	$sub_array[] = '<div class="update" data-id="'.$row["id_utilizador"].'" data-column="username">' . $row["username"] . '</div>';
	$sub_array[] = '<div class="update" data-id="'.$row["id_utilizador"].'" data-column="primeiro_nome">' . $row["primeiro_nome"] . '</div>';
	$sub_array[] = '<div class="update" data-id="'.$row["id_utilizador"].'" data-column="ultimo_nome">' . $row["ultimo_nome"] . '</div>';
	$sub_array[] = '<div class="update" data-id="'.$row["id_utilizador"].'" data-column="mail">' . $row["mail"] . '</div>';

}else{
	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="username">' . $row["username"] . '</div>';
	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="primeiro_nome">' . $row["primeiro_nome"] . '</div>';
	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="ultimo_nome">' . $row["ultimo_nome"] . '</div>';
	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="mail">' . $row["mail"] . '</div>';
	

 }
 if($row["id_utilizador"] == $_SESSION['idUtilizador'] ||  $row["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin' || $row["tipoUtilizador"] == 'adminP' && $_SESSION['tipoUtilizador'] == 'admin'){
	 if($_SESSION['tipoUtilizador'] == 'admin' && $row["tipoUtilizador"] == 'admin' || $_SESSION['tipoUtilizador'] == 'admin' && $row["tipoUtilizador"] == 'adminP'){

	$sub_array[] = '<div class="update" data-id="'.$row["id_utilizador"].'" data-column="password">---------</div>';
	
	 }else{
		$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="password">' . $row["password"] . '</div>';
	 }
 }else{

	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="password">' . $row["password"] . '</div>';

 }
 if($row["id_utilizador"] == $_SESSION['idUtilizador'] ||  $row["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin' || $row["tipoUtilizador"] == 'adminP'){

	$sub_array[] = '<div class="update" data-id="'.$row["id_utilizador"].'" data-column="tipoUtilizador">' . $row["tipoUtilizador"] . '</div>';

 }else{

	$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id_utilizador"].'" data-column="tipoUtilizador">' . $row["tipoUtilizador"] . '</div>';

 }
 if($row["estado"]=='ativo'){
	 if($row["id_utilizador"] == $_SESSION['idUtilizador'] ||  $row["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin' || $row["tipoUtilizador"] == 'adminP'){
		$sub_array[] = '';
 }else{
	
	$sub_array[] = '<a href="estadoUtilizadores.php?id=' . $row["id_utilizador"] . '><button type="button" class="btn btn-xs" style="background-color:yellow;">' . $row["estado"] . '</button></a>';
 
 }}else{
	if($row["id_utilizador"] == $_SESSION['idUtilizador'] ||  $row["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin' || $row["tipoUtilizador"] == 'adminP'){
		$sub_array[] = '';
	}else{
	
	$sub_array[] = '<a href="estadoUtilizadores.php?id=' . $row["id_utilizador"] . '><button type="button" class="btn btn-xs" style="background-color:#8B0000; color:white">' . $row["estado"] . '</button></a>';
 
 }}
 if($row["id_utilizador"] == $_SESSION['idUtilizador'] ||  $row["tipoUtilizador"] == 'admin' && $_SESSION['tipoUtilizador'] == 'admin' || $row["tipoUtilizador"] == 'adminP'){
	$sub_array[] = ''; 
 }else{
	$sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id_utilizador"].'">Apagar</button>';
 }

 $data[] = $sub_array;
}

function get_all_data($mysqli)
{
 $query = "SELECT * FROM utilizadores";
 $result = mysqli_query($mysqli, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($mysqli),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>