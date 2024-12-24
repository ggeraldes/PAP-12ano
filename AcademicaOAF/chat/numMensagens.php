<?php 

include("../loginRegistar/servidor.php");


if(! isset($_SESSION['idUtilizador'])){
header("location:../error404/index.html");
}

$output="";
$id = $_SESSION['idUtilizador'];
$sql1= mysqli_query($mysqli, "SELECT * FROM `chat` WHERE id > (select id from chat where idEnviou='$id' order by id desc limit 1) AND idRecebeu='$id'");
    $numMensagens = mysqli_num_rows($sql1);
    if($numMensagens > 0){
        $output .='<span class="numMensagens" style="font-size: 15px;">'.$numMensagens.'</span>';
    }else{
        $output .='';
    }

    echo $output;




?>