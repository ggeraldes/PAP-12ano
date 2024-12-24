<?php 

include("../loginRegistar/servidor.php");


if(! isset($_SESSION['idUtilizador'])){
header("location:../error404/index.html");
}


$idEnviou = $_SESSION['idUtilizador'];
$idRecebeu = 1;
$output = "";

$sql ="select * from chat where (idEnviou='$idEnviou' and idRecebeu='$idRecebeu') or (idEnviou='$idRecebeu' and idRecebeu='$idEnviou') order by id asc";
$query = mysqli_query($mysqli, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        if($row['idEnviou'] == $idEnviou){
            
           
            $output .= '<div class="messages__item messages__item--operator">'. htmlentities($row['mensagem']) .'</div>';

        }else{
            $output .= '<div class="messages__item messages__item--visitor">'. htmlentities($row['mensagem']) .'</div>';
        }
       
    }
    echo $output;
}






?>