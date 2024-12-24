<?php 


include("../../../loginRegistar/servidor.php");


setlocale(LC_TIME, 'pt', 'pt.utf-8', 'pt.utf-8', 'portuguese');


$sql = mysqli_query($mysqli,"select * from utilizadores where tipoUtilizador='normal' and verificacao='1' and ultimaMsg <> 0 order by dataChat desc");
$output="";

if(mysqli_num_rows($sql) == 0){
    $output .= "Sem mensagens.";
}elseif(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
       
    $query2 = mysqli_query($mysqli, "select * from chat where idEnviou={$row['id_utilizador']} or idRecebeu={$row['id_utilizador']}  order by id desc limit 1");
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){


        $hora = strtotime($row2['data']);
		$agora = strtotime(date('Y-m-d H:i:s'));
		$diff = abs($agora - $hora); 
  
  
        // To get the year divide the resultant date into
        // total seconds in a year (365*60*60*24)
        $years = floor($diff / (365*60*60*24)); 
        
        
        // To get the month, subtract it with years and
        // divide the resultant date into
        // total seconds in a month (30*60*60*24)
        $months = floor(($diff - $years * 365*60*60*24)
                                    / (30*60*60*24)); 
        
        
        // To get the day, subtract it with years and 
        // months and divide the resultant date into
        // total seconds in a days (60*60*24)
        $days = floor(($diff - $years * 365*60*60*24 - 
                    $months*30*60*60*24)/ (60*60*24));
        
        
        // To get the hour, subtract it with years, 
        // months & seconds and divide the resultant
        // date into total seconds in a hours (60*60)
        $hours = floor(($diff - $years * 365*60*60*24 
            - $months*30*60*60*24 - $days*60*60*24)
                                        / (60*60)); 
        
        
        // To get the minutes, subtract it with years,
        // months, seconds and hours and divide the 
        // resultant date into total seconds i.e. 60
        $minutes = floor(($diff - $years * 365*60*60*24 
                - $months*30*60*60*24 - $days*60*60*24 
                                - $hours*60*60)/ 60); 
        
        
        // To get the minutes, subtract it with years,
        // months, seconds, hours and minutes 
        $seconds = floor(($diff - $years * 365*60*60*24 
                - $months*30*60*60*24 - $days*60*60*24
                        - $hours*60*60 - $minutes*60)); 
        
        
        if ($years > 0)
        {
            $tempo = $years;
            $fim = "anos";
            if($years == 1) {
                $fim = "ano";
            }
        }elseif ($months > 0)
            {
                $tempo = $months;
                $fim = "meses";
                if($months == 1) {
                    $fim = "mês";
                }
            }elseif($days > 0)
                {
                    $tempo = $days;
                    $fim = "dias";
                    if($days == 1) {
                        $fim = "dia";
                    }
                }elseif(($hours - 1) > 0)
                    {
                        $tempo = $hours;
                        $fim = "h";
                    }elseif($minutes > 0)
                        {
                            $tempo = $minutes;
                            $fim = "min";
                        }elseif($seconds > 0)
                            {
                                $tempo = "";
                                $fim = "Agora Mesmo";
                            }
        

       $msg = $row2['mensagem'];

       if(strlen($msg) > 20){ 
           $msg = substr(htmlentities($msg), 0, 20).'...';
         
        } else{ 
            $msg = htmlentities($msg);
        }

        if($row2['idEnviou'] != $row['id_utilizador']){
       
        
            $result = '<p>'.$msg.' · '.$tempo.' '.$fim.'</p></div></div>';

        }elseif($row2['idEnviou'] == $row['id_utilizador']){
       
            $result = '<p style="color:black" ><b>'.$msg.' · '.$tempo.' '.$fim.'</b></p> </div></div> <div style="color:blue" class="status-dot"><i class="fas fa-circle"></i></div>';
            
            
            }
            $output .= '<a href="chatPro.php?idUtilizador='.$row['id_utilizador'].'">
                <div class="content">
                <img src="../'.$row['foto'].'" alt="">
                <div class="details">
                <span>'.$row['username'].'</span>
                '.$result.'
               
                
                </a>';
    }else{
        
        $output .= '<p>Sem mensagens.</p></div></div>';
    }

    
    
    }
}
echo $output;
?>





