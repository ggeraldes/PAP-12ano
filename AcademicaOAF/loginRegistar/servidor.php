<?php
	session_start();
	

	$username="";
	$primeiroNome="";
	$ultimoNome="";
	$email="";
	$estado="ativo";
	

	$erros = array();
	
	// conexão à base de dados
	
	$mysqli = new mysqli("localhost","root","","site_briosa");

	if ($mysqli->connect_error) {
  	die("Erro ao conectar à base de dados: " . $mysqli->connect_error);
}
	

	//ao clicar no botão registar..
	if (isset($_POST['registar'])){
		$username = $mysqli -> real_escape_string( $_POST['username']);
		$primeiroNome = $mysqli -> real_escape_string($_POST['primeiroNome']);
		$ultimoNome = $mysqli -> real_escape_string($_POST['ultimoNome']);
		$email = $mysqli -> real_escape_string($_POST['email']);
		$password_1 = $mysqli -> real_escape_string($_POST['password_1']);
		$password_2 = $mysqli -> real_escape_string($_POST['password_2']);
		$vkey= md5(time().$username);
		
		//verificar se o email e username já existem
		$sql_u = "SELECT * FROM utilizadores WHERE username='$username'";
  		$sql_e = "SELECT * FROM utilizadores WHERE mail='$email'";
  		$res_u = mysqli_query($mysqli, $sql_u);
  		$res_e = mysqli_query($mysqli, $sql_e);
		
		if (mysqli_num_rows($res_u) > 0) {
  	  	array_push($erros, "O Nome de utilizador já existe"); 	
  		
		
		}elseif (mysqli_num_rows($res_e) > 0) {
  	  	array_push($erros, "O email já existe"); 
		
		
		//verificar se tem todos os requisitos
		}elseif (empty($username) || strlen($username) < 5 || strlen($username) > 10) {
			array_push($erros, "O nome de utilizador tem de ter 5-10 carateres"); //adiciona um erro a 'erros' 
		
		}elseif (preg_match("/\s/", $username) || preg_match("/\s/", $primeiroNome) || preg_match("/\s/", $ultimoNome)) {
			array_push($erros, "Os nomes não deve conter espaços"); //adiciona um erro a 'erros'
		
		}elseif ( preg_match("#[0-9]+#", $primeiroNome) || preg_match("#[0-9]+#", $ultimoNome) || preg_match("/\W/", $primeiroNome) || preg_match("/\W/", $ultimoNome) || strlen($primeiroNome) < 2 || strlen($ultimoNome) < 2 || strlen($primeiroNome) > 14 || strlen($ultimoNome) > 14) {
			array_push($erros, "O primerio e último nome só devem conter letras (2-14)"); //adiciona um erro a 'erros' 
		
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($erros, "Endereço de email inválido"); //adiciona um erro a 'erros'
		
		}elseif ($password_1 != $password_2) {
			array_push($erros, "As palavras-passe não coincidem"); //adiciona um erro a 'erros' 
		
		}elseif ( !preg_match("#[0-9]+#", $password_1) || !preg_match("#[a-z]+#", $password_1) || !preg_match("#[A-Z]+#", $password_1) || !preg_match("/\W/", $password_1) || preg_match("/\s/", $password_1) || strlen($password_1) < 8 || strlen($password_1) > 32) {
			array_push($erros, "A palavra-passe tem de conter 8-32 carateres, uma letra maiúscula, um especial e um número"); //adiciona um erro a 'erros' 
		}

		// se não houver erros
		if (count($erros) == 0) {
			$password= md5($password_1); //encripta a palavra-passe antes de ela entrar na base de dados
			$sql = "INSERT INTO utilizadores (username, primeiro_nome, ultimo_nome, mail, password, vkey) VALUES ('$username','$primeiroNome','$ultimoNome','$email','$password', '$vkey')";
			
			mysqli_query($mysqli, $sql);
			if($sql)
			{
			$to=$email;
			$conteudo= "Verificação de email";
			$mensagem=
			"
						<html>

						<head>
						<title>Verificação de email</title>
						</head>
						<body>
						<center>
						
						<p>
							<h2>Olá $primeiroNome $ultimoNome</h2>
							<h4>Verificação de email</h4>
						</P>
						</center>
						<center>
							<table>
							<tr>
							<td><h3>Para confirmar o seu registo clique no link a baixo</h3></td>
							</tr>
							<tr>
							<td><h3><a href='localhost/academicaOAF/loginRegistar/verificacao?vkey=$vkey'>Verificar registo</a></h3></td>
							</tr>
							<tr>
							<td><h3>Se não souber a que se deve este email não clique no link</h3></td>
							</tr>
							<tr>
							<td><h3>Para qualquer tipo de informação contacte academicaoafsduq@gmail.com</h3></td>
							</tr>
							</table>
						</center>
						</body>
						</html>
						";
			$headers="From: academicaoafsduq@gmail.com \r\n";
			$headers .="MIME-Version: 1.0" . "\r\n";
			$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

			mail($to, $conteudo, $mensagem, $headers);
			echo "<script>alert('Verifique o email que enviámos');";
			echo "window.location='aac';</script>";
			}else{
				array_push($erros,"Aconteceu algo de errado"); //adiciona um erro a 'erros'
			}
		
		}
		
	}
	

//página de login
if (isset($_POST['login'])) {
	$username = $mysqli -> real_escape_string( $_POST['username']);
	$password = $mysqli -> real_escape_string($_POST['password']);
	if (empty($username)) {
			array_push($erros, "É necessário inserir o nome de utilizador"); //adiciona um erro a 'erros' 
		}
	if (empty($password)) {
			array_push($erros, "É necessário digitar a palavra-passe"); //adiciona um erro a 'erros' 
		}
	// se não houver erros
	if (count($erros) == 0) {
	$password= md5($password); //encripta a palavra-passe antes de a ler na base de dados
	$query = "SELECT * FROM utilizadores WHERE username='$username' AND password='$password'";
	
	$result = mysqli_query($mysqli, $query);
	
	
	if (mysqli_num_rows($result)==1) {
		//utilizador logado
		
		$row=mysqli_fetch_array($result);
		
		if($row["verificacao"]=="1")
		{
		if($row["estado"]=="inativo")
		{
			array_push($erros, "Conta inativa");
		}else{
		



		$_SESSION['numero']=$row["numero"];
		$_SESSION['idUtilizador']=$row["id_utilizador"];
		$_SESSION['username']=$row["username"];
		$_SESSION['primeiroNome']=$row["primeiro_nome"];
		$_SESSION['ultimoNome']=$row["ultimo_nome"];
		$_SESSION['email']=$row["mail"];
		$_SESSION['foto']=$row["foto"];
		$_SESSION['tipoUtilizador']=$row["tipoUtilizador"];
		$_SESSION['estado']=$row["estado"];
		$id = $_SESSION['idUtilizador'];

		if($_SESSION['tipoUtilizador'] == 'normal' ){
		$numeroMensagens = mysqli_query($mysqli,"SELECT * FROM chat WHERE idEnviou = '$id' or idRecebeu = '$id'");
		if (mysqli_num_rows($numeroMensagens) > 50) {

			mysqli_query($mysqli,"delete FROM chat WHERE idEnviou = '$id' or idRecebeu = '$id'");

		}}


		$primeiroNome = $mysqli -> real_escape_string($row["primeiro_nome"]);
		$ultimoNome = $mysqli -> real_escape_string($row["ultimo_nome"]);
		
			$to=$row["mail"];
			$conteudo= "Novo login";
			$mensagem="
			<html>

			<head>
			<title>Novo Login</title>
			</head>
			<body>
			<center>
			
			<p>
				<h2>Olá $primeiroNome $ultimoNome</h2>
				<h4>Reparamos que fez um novo login</h4>
			</P>
			</center>
			</body>
			</html>
			";
			$headers="From: academicaoafsduq@gmail.com \r\n";
			$headers .="MIME-Version: 1.0" . "\r\n";
			$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

			mail($to, $conteudo, $mensagem, $headers);
		
		
			header('location: aac'); //direciona para a pagina principal
	}}else{
		array_push($erros, "Conta à espera de verificação");
	}
	}
		
	else {
		array_push($erros, "Nome de utilizador e/ou palavra passe incorreto/s"); //adiciona um erro a 'erros' 
	}
	
	}}



//logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: aac');
}

//recuperar pass
if (isset($_POST['recuperar'])){
    
    $email = $mysqli -> real_escape_string($_POST['email']);
    $sql_e = "SELECT * FROM utilizadores WHERE mail='$email'";
	$result = mysqli_query($mysqli, $sql_e);
	if (mysqli_num_rows($result) < 1) {
		array_push($erros, "O email não existe"); 
		}else{
	$row=mysqli_fetch_array($result);
	$primeiroNome=$row["primeiro_nome"];
  	$res_e = mysqli_query($mysqli, $sql_e);

   
    if (count($erros) == 0) {
		$vkey= md5(time().$primeiroNome);
        $sql = "update utilizadores set vkey='$vkey' where mail='$email'";
		
        mysqli_query($mysqli, $sql);
        if($sql)
			{

			include('phpmailer/ficheiroPrincipal.php');
			$mail->addAddress($email);
			$mail->Subject = "Mudar password";
			$mail->Body = 
			"
						<html>

						<head>
						<title>Mudar Password</title>
						</head>
						<body>
						<center>
						
						<p>
							<h2>Olá $primeiroNome $ultimoNome</h2>
							<h4>Mudar password</h4>
						</P>
						</center>
						<center>
							<table>
							<tr>
							<td><h3>Para mudar a password da sua conta clique no link a cim</h3></td>
							</tr>
							<tr>
							<td><h3><a href='localhost/academicaOAF/novapass?vkey=$vkey'>Mudar Password</a></h3></td>
							</tr>
							<tr>
							<td><h3>Se não souber a que se deve este email não clique no link</h3></td>
							</tr>
							<tr>
							<td><h3>Para qualquer tipo de informação contacte academicaoafsduq@gmail.com</h3></td>
							</tr>
							</table>
						</center>
						</body>
						</html>
						";

						$mail->send();
			echo "<script>alert('Verifique o seu email para proceder à alteração da password!');";
			echo "window.location='aac';</script>";
			
			}else{
				array_push($erros,"Aconteceu algo de errado"); //adiciona um erro a 'erros'
			}
        }}



    }
//guardar nova pass
	if (isset($_POST['guardar'])){
		
		$password_1 = $mysqli -> real_escape_string($_POST['password1']);
		$password_2 = $mysqli -> real_escape_string($_POST['password2']);
		$vkey = $mysqli -> real_escape_string($_POST['vkey']);
		$query = "SELECT * FROM utilizadores WHERE vkey='$vkey' limit 1";
		$result = mysqli_query($mysqli, $query);
		$row=mysqli_fetch_array($result);
		$primeiroNome=$row["primeiro_nome"];
		$ultimoNome=$row["ultimo_nome"];
		$oldPass=$row["password"];
		$email=$row["mail"];
		$password1=md5($password_1);
		if ($password1 == $oldPass) {
			array_push($erros, "Utilize uma password diferente da antiga"); //adiciona um erro a 'erros' 
		}elseif ($password_1 != $password_2) {
			array_push($erros, "As palavras-passe não coincidem"); //adiciona um erro a 'erros' 
		}elseif ( !preg_match("#[0-9]+#", $password_1) || !preg_match("#[a-z]+#", $password_1) || !preg_match("#[A-Z]+#", $password_1) || !preg_match("/\W/", $password_1) || preg_match("/\s/", $password_1) || strlen($password_1) < 8 || strlen($password_1) > 32) {
			array_push($erros, "A palavras-passe deve conter 8-32 carateres, pelo menos uma letra maiúscula, um caracter especial e um número"); //adiciona um erro a 'erros' 
			}
		
		if (count($erros) == 0) {
			$password= md5($password_1); //encripta a palavra-passe antes de ela entrar na base de dados
			$sql = "update utilizadores set password='$password' where vkey='$vkey' limit 1";
			mysqli_query($mysqli, $sql);
			if($sql)
				{
				$to=$email;
				$conteudo= "Alteração de password";
				$mensagem=
				"
							<html>
	
							<head>
							<title>Alteração de password</title>
							</head>
							<body>
							<center>
							
							<p>
								<h2>Olá $primeiroNome $ultimoNome</h2>
								<h4>A sua password foi alterada com sucesso</h4>
							</P>
							</center>
							<center>
								<table>
								<tr>
								<td><h3>Para qualquer tipo de informação contacte academicaoafsduq@gmail.com</h3></td>
								</tr>
								</table>
							</center>
							</body>
							</html>
							";
				$headers="From: academicaoafsduq@gmail.com \r\n";
				$headers .="MIME-Version: 1.0" . "\r\n";
				$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
					
				mail($to, $conteudo, $mensagem, $headers);
				
				$vkey1= md5(time().$vkey);
				$novavkey = "update utilizadores set vkey='$vkey1' where mail='$email' limit 1";
				$result2= mysqli_query($mysqli, $novavkey);
				

					echo "<script>alert('Palavra-passe alterada com sucesso!');";
				echo "window.location='aac';</script>";
				
				
				
				}else{
					array_push($erros,"Aconteceu algo de errado"); //adiciona um erro a 'erros'
				}
			}
	
	
	
		}

	







	
?>





