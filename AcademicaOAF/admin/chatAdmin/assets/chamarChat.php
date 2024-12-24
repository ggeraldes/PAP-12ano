<?php 

include("../../../loginRegistar/servidor.php");


if(! isset($_SESSION['idUtilizador']) || $_SESSION['tipoUtilizador']== 'normal' || $_SESSION['tipoUtilizador']== 'editor' ){
header("location:../../../error404/index.html");
}

$output="";
$idRecebeu = mysqli_real_escape_string($mysqli, $_POST['incoming_id']);
$idEnviou = 1;
$sql ="select * from chat where (idEnviou='$idEnviou' and idRecebeu='$idRecebeu') or (idEnviou='$idRecebeu' and idRecebeu='$idEnviou') order by id asc";
$query = mysqli_query($mysqli, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        if($row['idEnviou'] === $idRecebeu){
                         $output .= '<div class="chat incoming">
                                <div class="details">
                                    <p>'. htmlentities($row['mensagem']) .'</p>
                                </div>
                                </div>';
           
                }elseif($row['idRecebeu'] === $idRecebeu){
                    
                                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. htmlentities($row['mensagem']) .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat outgoing">
                    <div class="details">
                        <p>Ainda sem Conversa</p>
                    </div>
                    </div>';
                }
       
    }
    echo $output;
}






?>