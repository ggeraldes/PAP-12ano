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
        $id=$_GET["numero"];

        $pN="";
        $uN="";
        $nacionalidade="";
        $dataNasc="";
        $dataPrim="";
        $foto="";
        $naturalidade="";
        $clubeAnterior="";
        $tipoTreinador="";
    
        $res=mysqli_query($mysqli, "select * from equipaprot where id= $id");
        if(mysqli_num_rows($res) > 0)   
        {
        while($row=mysqli_fetch_array($res))
        {
            $pN=$row["primN"];
            $uN=$row["ultiN"];
            $nacionalidade=$row["nacionalidade"];
            $dataNasc=$row["dataNasc"];
            $dataPrim=$row["dataPrim"];
            $foto=$row["foto"];
            $banner=$row["banner"];
            $naturalidade=$row["naturalidade"];
            $clubeAnterior=$row["clubeAnterior"];
            $tipoTreinador=$row["tipoTreinador"];
        }}
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
                        <link href='https://fonts.googleapis.com/css?family=Finger Paint' rel='stylesheet'>
						<h3 style=" font-family: 'Finger Paint';">Mister</h3> 
						<h3 style=" font-family: 'Finger Paint'; font-size:40px;"><?php echo $pN ?></h3> 
						
						</div>
					</article>
				
					<article>
							
						</article>
                        <table id="tableA">
                        <tr>
                        <th class="th">Tp. Treinador</th>
                        <th class="th">Idade</th>
                        <th class="th">Nacionalidade</th>
                        <th class="th">Naturalidade</th>
                        <th class="th">Data de Nascimento</th>
                        <th class="th">Data de Estreia</th>
                        <th class="th">Clube Anterior</th>
                        </tr>
                        <tr>
						<td class="th"><?php echo $tipoTreinador; ?></td>
                        <td class="th"><?php echo $idade; ?></td>
                        <td class="th"><?php echo $nacionalidade; ?></td>
                        <td class="th"><?php if($naturalidade==""){echo "----------";}else{ echo $naturalidade;} ?></td>
                        <td class="th"><?php echo strftime('%d de %B de %Y', strtotime($dataNasc)); ?></td>
                        <td class="th"><?php if($dataPrim==""){echo "----------";}else{ echo $dataPrim;} ?></td>
                        <td class="th"><?php if($clubeAnterior==""){echo "----------";}else{echo $clubeAnterior;} ?></td>
                        </tr>
                        </table>
                        <table id="tableB">
                        <tr>
                        <th class="th">Tp. Treinador</th>
                        <td class="th"><?php echo $tipoTreinador; ?></td>
                        </tr>
                        <th class="th">Idade</th>
                        <td class="th"><?php echo $idade; ?></td>
                        </tr>
                        <th class="th">Nacionalidade</th>
                        <td class="th"><?php echo $nacionalidade; ?></td>
                        </tr>
                        <th class="th">Naturalidade</th>
                        <td class="th"><?php if($naturalidade==""){echo "----------";}else{ echo $naturalidade;} ?></td>
                        </tr>
                        <th class="th">Data de Nascimento</th>
                        <td class="th"><?php echo $dataNasc; ?></td>
                        </tr>
                        <th class="th">Data de Estreia</th>
                        <td class="th"><?php if($dataPrim==""){echo "----------";}else{ echo $dataPrim;} ?></td>
                        </tr>
                        <th class="th">Clube Anterior</th>
                        <td class="th"><?php if($clubeAnterior==""){echo "----------";}else{echo $clubeAnterior;} ?></td>
                        </tr>
                        </table>
				</div>
				
			</section><br>
            <?php if( isset($_SESSION['tipoUtilizador']) && $_SESSION['tipoUtilizador'] != "normal") { ?>
	
            <form action="" name= "form1" method= "post" enctype="multipart/form-data" style="padding-left:50px;">
            
            <div class="form-group">
            <label for="email">Imagem de fundo</label>
            <input type="file"   name="foto" >
            </div>
            <button type="submit" onClick="window.location.reload();" name="editar" class="btn btn-success" >editar</button>
            
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
            $dst="./editor/equipaP/bannerT/".$tm.$fnm;
		    $dst1="bannerT/".$tm.$fnm;
		    move_uploaded_file($_FILES["foto"]["tmp_name"], $dst); 
            $sql = "update equipaprot set banner= '$dst1'  where id=$id ";
            mysqli_query($mysqli, $sql);
        }

        ?>
		
	<?php

    }

        ?>
</html>