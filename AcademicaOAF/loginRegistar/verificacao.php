<?php 

if(isset ($_GET['vkey'])){
    $vkey=$_GET['vkey'];
    include("servidor.php");

    $resultado= "Select verificacao, vkey from utilizadores where verificacao=0 and vkey='$vkey' limit 1";
    $result = mysqli_query($mysqli, $resultado);

    if(mysqli_num_rows($result)==1){

        $atualiza = $mysqli -> query ("update utilizadores set verificacao=1 where vkey='$vkey'");
        if($atualiza)
        {
            echo "<script>alert('A sua conta foi verificada!');";
            echo "window.location='../aac';</script>";
        }else{
            header("location:../error404/index.html");
        }

    }else{
        header("location:../error404/index.html");
    }

}else{
    header("location:../error404/index.html");
}



?>
