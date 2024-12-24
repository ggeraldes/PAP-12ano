
<!DOCTYPE HTML>

<html>
	<head>
		<title>Status Jogador | Site oficial AAC-OAF</title>
		<meta charset="utf-8" />
		<html lang="pt">
		<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
			
	</head>
	<body>

		<!-- Header -->
			<?php include('inc/header.php')?>
		<!-- -->
        <?php 
       
        $numero=$_GET["numero"];

        $pN="";
        $uN="";
        $idade="";
        $nacionalidade="";
        $dataNasc="";
        $dataPrim="";
        $id="";
        $foto="";
        $alcunha="";
        $posicao="";
        $naturalidade="";
        $clubeAnterior="";
    
        $res=mysqli_query($mysqli, "select * from equipaproj where numero= '$numero' limit 1");
        if(mysqli_num_rows($res) > 0)   
        {
            while($row=mysqli_fetch_array($res))
            {
                
                $pN=$row["primN"];
                $uN=$row["ultiN"];
                
                $nacionalidade=$row["nacionalidade"];
                $dataNasc=$row["dataNasc"];
                $dataPrim=$row["dataPrim"];
                $id=$row["id"];
                $foto=$row["foto"];
                $banner=$row["banner"];
                $alcunha=$row["alcunha"];
                $posicao=$row["posicao"];
                $naturalidade=$row["naturalidade"];
                $clubeAnterior=$row["clubeAnterior"];
            }
        }
        else{
        ?>
		<script type="text/javascript">
		window.location="equipapro";
	
		</script>
	    <?php   
        }




        $dob = new DateTime($dataNasc);
        $now = new DateTime();
        $difference = $now->diff($dob);
        $idade = $difference->y;


       
    
    ?>

        <!-- Banner -->
			<style>
				#banner{
					background-image:url("editor/equipaP/<?php echo $banner; ?>");
                    background-position: center top;
				}
			</style>
			<section  id="banner" >
				<div  class="inner">
	
					<article class="nome">
						<div style="text-align:left;" class="content" >
                        <link href='https://fonts.googleapis.com/css?family=Finger+Paint&display=swap' rel='stylesheet'>
						<h3 style=" font-family: 'Finger Paint';"><?php echo $alcunha ?></h3> 
						<h3 style=" font-family: 'Finger Paint'; font-size:40px;"><?php echo $numero ?></h3> 
						
						</div>
					</article>
				
					
                        <table id="tableA">
                            <tr>
                                <th class="th">Posição</th>
                                <th class="th">Idade</th>
                                <th class="th">Nacionalidade</th>
                                <th class="th">Naturalidade</th>
                                <th class="th">Data de Nascimento</th>
                                <th class="th">Data de Estreia</th>
                                <th class="th">Clube Anterior</th>
                            </tr>
                            <tr>
                                <td class="th"><?php echo $posicao; ?></td>
                                <td class="th"><?php echo $idade; ?></td>
                                <td class="th"><?php echo $nacionalidade; ?></td>
                                <td class="th"><?php if($naturalidade==""){echo "----------";}else{ echo $naturalidade;} ?></td> 
                                <td class="th"><?php echo utf8_encode(ucwords(strftime('%d de %B de %Y', strtotime($dataNasc))));  ?></td>
                                <td class="th"><?php if($dataPrim==""){echo "----------";}else{ echo $dataPrim;} ?></td>
                                <td class="th"><?php if($clubeAnterior==""){echo "----------";}else{echo $clubeAnterior;} ?></td>
                            </tr>
                        </table>
                        <table id="tableB">
                            <tbody class="tbody">
                                <tr class="tr">
                                    <th class="th">Posição</th>
                                    <td class="th"><?php echo $posicao; ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="th">Idade</th>
                                    <td class="th"><?php echo $idade; ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="th">Nacionalidade</th>
                                    <td class="th"><?php echo $nacionalidade; ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="th">Naturalidade</th>
                                    <td class="th"><?php if($naturalidade==""){echo "----------";}else{ echo $naturalidade;} ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="th">Data de Nascimento</th>
                                    <td class="th"><?php echo $dataNasc; ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="th">Data de Estreia</th>
                                    <td class="th"><?php if($dataPrim==""){echo "----------";}else{ echo $dataPrim;} ?></td>
                                </tr>
                                <tr class="tr">
                                    <th class="th">Clube Anterior</th>
                                    <td class="th"><?php if($clubeAnterior==""){echo "----------";}else{echo $clubeAnterior;} ?></td>
                                </tr>
                            </tbody>
                        </table>
				</div>
				
			</section><br>
            <?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
	
            <form action="" name= "form1" method= "post" enctype="multipart/form-data" style="padding-left:50px;">
            
            <div class="form-group">
            <label for="email">Imagem de fundo</label>
            <input type="file"   name="foto" >
            </div>
            <button type="submit" name="editar" class="btn btn-success" >editar</button>
            
            </form>
	
           <?php }else{

           } ?>
            
        <!-- Footer -->
			<?php include('inc/footer.php')?>
		<!-- -->

		

	</body>
   <?php if(isset($_POST["editar"])){
		
		
		$tm=md5(time());
		$fnm=$_FILES["foto"]["name"];
        if($fnm==""){
            

        }
        else{
            $dst="./editor/equipaP/bannerJ/".$tm.$fnm;
		    $dst1="bannerJ/".$tm.$fnm;
		    move_uploaded_file($_FILES["foto"]["tmp_name"], $dst); 
            $sql = "update equipaproj set banner= '$dst1'  where id=$id ";
            mysqli_query($mysqli, $sql);
        }

        ?>
		<script type="text/javascript">
		window.location="status?numero=<?php echo $row["numero"]; ?>";
	
		</script>
	<?php

    }

        ?>
</html>