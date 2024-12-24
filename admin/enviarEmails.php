<?php 
include ("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}?>
<html>
 <head>
  <title>AAC/OAF - Enviar Emails</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="../images/aacLogo.png" type="image/png" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    	<script>
									if ( window.history.replaceState ) {
										window.history.replaceState( null, null, window.location.href );
									}
									</script>
    <?php
    $subject = "";
    $message = "";
    $email = "";
    
    ?>

  
 </head>
 <body style="background-image:url(../images/EnviarEmail.jpg);">
 
 <div class="container" >
 
    <div class="row">
    
        <div class="col-md-8 offset-md-2">
        
            <div class="card mt-5" >
            <a href="../perfil"><button type="button" class="btn btn-dark">Voltar</button></a>
                <div class="card-body" >
                    <h1 class="card-title">
                       Enviar Email
                    </h1>
                    
                    

                   <form method="post" action="enviarEmails.php"  >
                   
              

                        <div class="form-group" style="width:49% ; display:inline-block; text-align:center">
                            <input type="radio" id="html" name="yo" checked="checked" value="1" onclick="show1()">
                            <label for="html">Para todos</label>
                        </div>

                        <div class="form-group" style="width:49%;display:inline-block; text-align:center" >
                             <input type="radio" id="html" name="yo" value="2"  onclick="show2()">
                            <label for="html">Para um específico</label>
                        </div>
                        
                          <div class="form-group" id="email" style="display:none" >
                              <label for="subject">Email</label>
                         <input list="brow"  class="form-control" name="email" >
                        <datalist id="brow" >
                        <?php 
                        $sql = "select mail from utilizadores where tipoUtilizador='normal' order by mail";
                        $search = mysqli_query($mysqli, $sql);
                        while($row=mysqli_fetch_array($search)){
                        ?>
                          <option value="<?php echo $row['mail']; ?>">
                        <?php } ?>
                        </datalist>  
                         </div>
                        
                         <div class="form-group">
                            <label for="subject">Assunto</label>
                            <input type="text" name="subject" id="subject" class="form-control" value="<?php echo $subject ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Texto</label>
                            <textarea name="message" id="message" class="form-control" rows="12" value="<?php echo $message ?>" required></textarea>
                        </div>
                        
                       

                        <button type="submit"  class="btn btn-primary btn-block" name="enviar">Enviar Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
    <script>
			function show1(){
              document.getElementById('email').style.display ='none';
            }
            function show2(){
              document.getElementById('email').style.display = 'block';
            }
			
		</script>
 
 
 

  
 </body>
 <?php
 
 if (isset($_POST['enviar'])) {
     
        
 
        $radio = $_POST['yo'];
		$subject = $mysqli -> real_escape_string($_POST['subject']);
	    $message = $mysqli -> real_escape_string($_POST['message']);
 
            include('../loginRegistar/phpmailer/ficheiroPrincipal.php');
          
        
        if ($radio=="1")
            {
                
            $sql = "select * from utilizadores where tipoUtilizador='normal'";
            $search = mysqli_query($mysqli, $sql);
            while($row=mysqli_fetch_array($search)){
            $email = $row['mail'];
            $primeiroNome = $row['primeiro_nome'];
            $ultimoNome = $row['ultimo_nome'];
            $mail->addBCC($email);
			
			$mail->Subject = "$subject";
			$mail->Body =
			"
						<html>

						<head>
						<title>$subject</title>
						</head>
						<body>
						<center>
						
						<p>
							<h2>Olá $primeiroNome $ultimoNome</h2>
							<h4>$subject</h4>
						</P>
						</center>
						<center>
							<table>
							<tr>
							<td><h3>$message</h3></td>
							</tr>
							</table>
						</center>
						</body>
						</html>
						";
				
			$mail->send();
			$mail->ClearAddresses();
            }    
            
            echo "<script>alert('Enviado com sucesso!');<script>";
			   
            }elseif($radio=="2"){
                
                	$email = $mysqli -> real_escape_string($_POST['email']);
                	if($_POST['email']==""){
                	    echo "<script>alert('Tem de inserir um email');<script>";
                	}else{
                	
                	$sql = "select * from utilizadores where mail='$email' limit 1";
                	$user = mysqli_query($mysqli, $sql);
                	if(mysqli_num_rows($user) == 0){
                	    echo "<script>alert('Email não encontrado');</script>";
                	}else{
                    
                    $row=mysqli_fetch_array($user);
                    $primeiroNome = $row['primeiro_nome'];
                    $ultimoNome = $row['ultimo_nome'];
                	
                		$mail->addAddress($email);
            			$mail->Subject = "$subject";
            			$mail->Body =
            			"
            							<html>

            						<head>
            						<title>$subject</title>
            						</head>
            						<body>
            						<center>
            						
            						<p>
            							<h2>Olá $primeiroNome $ultimoNome</h2>
            							<h4>$subject</h4>
            						</P>
            						</center>
            						<center>
            							<table>
            							<tr>
            							<td><h3>$message</h3></td>
            							</tr>
            							</table>
            						</center>
            						</body>
            						</html>
            						";
            				
            			if($mail->send()){
                        echo "<script>alert('Enviado com sucesso!');</script>";
            			}else{
            			     echo "<script>alert('Algo correu mal!');<script>";
            			}}}
                
            }else{
  	  	   	
  		echo "<script>alert('Algo correu mal!');<script>";
		
	} 
 }
 ?>
</html>