<?php 


include("../../../loginRegistar/servidor.php");

$textoPesquisa = mysqli_real_escape_string($mysqli, $_POST['searchTerm']);
$output="";

$sql = mysqli_query($mysqli, "select * from utilizadores where username LIKE '%{$textoPesquisa}%' and tipoUtilizador='normal' and verificacao='1' and ultimaMsg <> 0 order by dataChat desc ");
if(mysqli_num_rows($sql) == 0){
    $output .= "Sem utilizadores para falar";
}elseif(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
       
    $query2 = mysqli_query($mysqli, "select * from chat where idEnviou={$row['id_utilizador']} or idRecebeu={$row['id_utilizador']} order by id desc limit 1");
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){

        $hora = strtotime($row2['data']);
		$horaf = date('d',$hora);
		$tempo = date('d') - $horaf;
		$fim = 'dias';

		if($tempo == 1)
		{
			$fim = 'dia';
		}
		if ($tempo == 0)
		{
			$horaf = date('H',$hora);
			$agora = date('H') - 1;
			$tempo = $agora - $horaf;      
			$fim = 'h';
			if ($tempo == 0)
			{
				$horaf = date('i',$hora);
				$tempo = date('i') - $horaf;
				$fim = 'min';      
				if ($tempo == 0)
				{
					$tempo ='Agora Mesmo';
					$fim = '';
				}
			}
		}

        if($row2['idEnviou'] != $row['id_utilizador']){
       
        
            $result = '<p>'.$row2['mensagem'].' · '.$tempo.' '.$fim.'</p></div></div>';

        }elseif($row2['idEnviou'] == $row['id_utilizador']){
       
            $result = '<p style="color:black" ><b>'.$row2['mensagem'].' · '.$tempo.' '.$fim.'</b></p></div></div> <div style="color:blue" class="status-dot"><i class="fas fa-circle"></i></div>';
            
            
            }
    }else{
        
        $result = '<p>Sem mensagens.</p></div></div>';
    }

    
    $output .= '<a href="chatPro.php?idUtilizador='.$row['id_utilizador'].'">
                <div class="content">
                <img src="../'.$row['foto'].'" alt="">
                <div class="details">
                <span>'.$row['username'].'</span>
                '.$result.'
                
                </a>';
    }
}
echo $output;
?>