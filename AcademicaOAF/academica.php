<!DOCTYPE HTML>

<html>
	<head>
		<title>A académica | Site oficial AAC-OAF</title>
		<meta charset="utf-8" />
		<html lang="pt">
		<link rel="icon" href="images/aacLogo.png" type="image/png" sizes="16x16">
		<style>
				#header #academica{
					border-bottom: 5px solid white;
				}
		</style>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			
	</head>
	<body style="background-color: #eeeeee">

		<!-- Header -->
			<?php include('inc/header.php')?>
		<!-- -->
		


	
			<div class="academicaPrincipal" id="academicaPrincipal">

				<div class="academicaCadaCoisa" onclick="show1()" id="d1">
					<img src="images/palmares.jpg">
					<h1>Histórico e Palmarés</h1>
				</div>

				<div class="academicaCadaCoisa" onclick="show2()" id="d2">
					<img src="images/resumoHistoria.jpg">
					<h1>Resumo História</h1>
				</div>

				<div class="academicaCadaCoisa" onclick="show3()" id="d3">
					<img src="images/hinoBriosa.jpg">
					<h1>Hino da Briosa</h1>
				</div>

				<div class="academicaCadaCoisa" onclick="show4()" id="d4">
					<img src="images/simboloAntigo.jpg">
					<h1>O Símbolo</h1>
				</div>
								
									
			</div>

			<div id="a1" style="display:none">
				
				<div class="textoPalmares">
					<h1>Taça de Portugal</h1>
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="images/palmares.jpg" style="width:100%">
						<img class="mySlides" src="images/palmares1.jpg" style="width:100%">

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					<div class="anostxt">
						<h3 class="anos">Vencedores: <b>1938/39</b> (3-2) vs Benfica, <B>2011/12</b> (1-0) vs Sporting<h3>
						<h3 class="anos">Finalista Vencido: <b>1950/51</b> (1-5) vs Benfica, <b>1966/67</b> (2-3) vs Setúbal, <b>1968/69</b> (1-2) vs Benfica<h3>
						<h3 class="anos">Participações: <b>78</b><h3>
					</div>
				</div>
				<div class="textoPalmares">
					<h1>Campeonato</h1>
					<div class="w3-content w3-display-container">
						<img class="mySlides1" src="images/campeonato.jpg" style="width:100%">
						<img class="mySlides1" src="images/campeonato1.jpg" style="width:100%">

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs1(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs1(1)">&#10095;</button>
					</div>
					<div class="anostxt">
						<h3 class="anos">1º Divisão: <b>64</b> participações<h3>
						<h3 class="anos" id="anosPad">Melhor classificação: <b>2º lugar, em 1966/67</b><h3>
						<h3 class="anos" >2º Divisão: <b>21</b> participações<h3>
						<h3 class="anos"  id="anosPad">Melhor classificação: Vencedor em <b>1948/49, 1972/73, 1979/80</b> (zona centro, 2º nacional), <b>1983/84</b> (zona centro)<h3>
						<h3 class="anos">Campeonato de Portugal: <b>13</b> participações<h3>
						<h3 class="anos">Melhor classificação: <b>2º lugar, em 1922/23</b><h3>
						</div>
				</div>
				<div class="textoPalmares">
					<h1>Taça da Liga</h1>
					<div class="w3-content w3-display-container">
						<img src="images/tacadaliga.jpg" style="width:100%; border-radius: 5px;">
					</div>
					<div class="anostxt">
						<h3 class="anos">Meias-Finais: <b>2009/10</b> (0-1) vs Porto<h3>
						<h3 class="anos">Participações: <b>11</b><h3>
					</div>
				</div>
				<div class="textoPalmares">
					<h1>Competições Europeias</h1>
					<div class="w3-content w3-display-container">
						<img class="mySlides2" src="images/competicoesEuropeias.jpg" style="width:100%">
						<img class="mySlides2" src="images/competicoesEuropeias1.jpg" style="width:100%">
						<img class="mySlides2" src="images/competicoesEuropeias2.jpg" style="width:100%">

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs2(1)">&#10095;</button>
					</div>
					<div class="anostxt">
						<h3 class="anos"id="anosPad">Taça das Cidades com Feira: <b>1968/69</b>  (0-1, 1-0) vs Lyon, derrota por moeda ao ar<h3>
						<h3 class="anos" id="anosPad">Taça das Taças: <b>1969/70</b> (0-0, 1-0) vs Kuopion; (0-1, 2-0) vs Magdeburgo; (0-0, 0-1) vs Manchester City - ap<h3>
						<h3 class="anos" id="anosPad">Taça UEFA: <b>1971/72</b> (0-3, 1-4) vs Wolverhampton<h3>
						<h3 class="anos">Liga Europa: <b>2012/13</b> (1-3, 1-1) vs Viktoria Plzen; (1-1, 0-2) vs Hapoel; (1-2, 2-0) vs Atl. Madrid<h3>
						</div>
				</div>
			</div>

			<div id="a2" style="display:none">
				<div class="resumoHistoria">
					<div class="textoPalmares">
						<h1 style="text-align:left">Fundação</h1>

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">A Associação Académica de Coimbra foi fundada no dia 3 de Novembro de 1887, 
						mas as suas origens remontam à criação da Academia Dramática, 
						em meados do século XIX. A Associação Académica de Coimbra instalou-se no Colégio de São Apóstolo e o seu primeiro presidente foi António 
						Luiz Gomes, estudante de Direito que mais tarde se tornaria reitor da Universidade de Coimbra.</p>
						<img class="resumoHistoriaImg" src="images/resumoHistoria1.jpg">
						<h1 style="text-align:left">O Primeiro Jogo</h1>

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">No jogo com o Ginásio Club de Coimbra, a Associação Académica apresentou 
						a sua primeira equipa da História, tendo alinhado com: 
							Durval de Morais (Medicina); César Moniz Pereira (Direito) e Fernando Andrade (Direito); António Luís Lopes (Escola Agrícola), 
							António Perdigão (Direito) e N.N.; Salvador (Medicina), Filipe Mendes (Direito), José Júlio da Costa (Matemática), José de Melo 
							Cardoso (Medicina) e José Natividade Coelho (Direito, capitão de equipa). De salientar o facto de o N.N., que quer dizer Não Nomeado, 
							ser alguém que, por algum motivo, se recusou a identificar-se publicamente.</p>
							<img class="resumoHistoriaImg" src="images/resumoHistoria2.jpg">

						<h1 style="text-align:left">A Tomada da Bastilha</h1>

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">Em Outubro de 1915 chegou a Coimbra Augusto da Fonseca Júnior, um estudante 
						de Medicina que se revelou um grande jogador de futebol mas 
							também um importante dirigente estudantil, tendo mesmo presidido à Associação Académica. Na noite de 25 de Novembro de 1920, “Passarinho”, 
							nome pelo ficou conhecido, liderou a invasão à Torre de Universidade permitindo assim a ocupação total do Colégio de S. Paulo Eremita pela 
							AAC. Ainda hoje, a Associação Académica de Coimbra comemora este episódio, que perdura na História como “A Tomada da Bastilha”.</p>
							<img class="resumoHistoriaImg" src="images/resumoHistoria3.jpg">
						<h1 style="text-align:left">Finalmente, o Campo de Santa Cruz</h1>

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">Desde o dia 14 de Novembro de 1901 que a Associação Académica de Coimbra procurava 
						sensibilizar a Câmara Municipal para a edificação da primeira 
							infra-estrutura desportiva da cidade, pois até lá a Académica ia utilizando a Ínsua dos Bentos para praticar futebol. Foi então que, de forma 
							informal e cerca de duas décadas depois, foi finalmente inaugurado o Campo de Santa Cruz. Em Fevereiro de 1918 a Académica jogou com o Império 
							de Lisboa, tendo perdido por 3-2, naquele que foi o primeiro encontro ali disputado. Contudo, rapidamente se percebeu que não estavam reunidas 
							as condições mínimas de funcionamento e a Académica lá voltou a utilizar a Ínsua dos Bentos…</p>
							<img class="resumoHistoriaImg" src="images/resumoHistoria4.jpg">
					</div>

				</div>
			</div>

			<div id="a3" class="hinoAcademica" style="display:none" >

				<div class="audioDiv">
					<audio controls>
						<source src="audio/hino.mp3" type="audio/mp3">
					</audio>
				</div>
				<div class="texto">

					<p>De Santa Clara</p>
					<p>olha-se o mundo</p>
					<p>e o tempo pára</p>
					<p>por um segundo</p>

					<br>

					<p>Quem diz que o amor</p>
					<p>é um estudante</p>
					<p>faz um doutor</p>
					<p>de cada amante</p>

					<br>

					<p>Se fores à Lapa</p>
					<p>hás-de encontrar</p>
					<p>a minha capa</p>
					<p>pra te tapar</p>

				</div>
				<div class="texto">

					<p>Apaixonado</p>
					<p>tenho sossego</p>
					<p>cantando o fado</p>
					<p>junto ao Mondego</p>

					<br>

					<p>Ai de quem</p>
					<p>se detém</p>
					<p>a escutar por</p>
					<p>uma vez o segredo</p>
					<p>que Dom Pedro</p>
					<p>só diz a Inês</p>
					
					<br>

					<p>Briosa,</p>
					<p>amor pra sempre</p>
					<p>amor que a gente</p>
					<p>sabe de cor</p>
					<p>Briosa,</p>
					<p>amor imenso</p>
					<p>amor que eu penso</p>
					<p>ser o maior</p>

					</div>
					<div class="texto">

					<p>Briosa,</p>
					<p>amor sofrido</p>
					<p>que dá sentido</p>
					<p>à ilusão</p>

					<br>

					<p>Briosa,</p>
					<p>amor materno</p>
					<p>bater eterno</p>
					<p>de um coração</p>

					<br>

					<p>Briosa,</p>
					<p>amor pra sempre</p>
					<p>que a gente sente</p>
					<p>ser o maior!</p>

					<br>
					
				</div>
			</div>

			<div id="a4" style="display:none">
			<div class="textoPalmares">
						

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">A história do actual símbolo da Briosa obriga-nos a falar, 
						orgulhosamente, de Fernando Ferreira Pimentel. Este antigo estudante de Medicina, nascido em Manteigas a 22 de Julho de 1905, foi o responsável 
						pela criação e desenho do actual emblema, no longínquo ano de 1928. No entanto, o losango que hoje todos conhecemos nem sempre foi o símbolo 
						da Académica…</p>
						<img class="resumoHistoriaImg" src="images/osimbolo.jpg">

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">Respeitando sempre a relação próxima com os estudantes 
						universitários e a Academia de Coimbra, o emblema da Académica representou-se de várias maneiras antes de ganhar o seu desenho actual. 
						Assim, desde a imagem de uma tricana a uma capa de estudante erguida num pau ou num mastro de bandeira, contam-se quatro versões anteriores 
						à versão desenhada por Fernando Pimentel.</p>
					
						<div class="imgSimbolo w3-content w3-section" style="text-align:middle">
						<img class="mySlides3 resumoHistoriaImg" src="images/osimbolo1.jpg">
						<img class="mySlides3 resumoHistoriaImg " src="images/osimbolo2.jpg"> 
						<img class="mySlides3 resumoHistoriaImg" src="images/osimbolo3.jpg">
						</div>

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">Na última versão não definitiva do emblema, este era representado pelas 
						letras "AAC". Foi numa partida com o Sporting que a Briosa usou pela primeira vez as três letras como símbolo mas a verdade é que esse encontro não traz 
						boas memórias para os estudantes. A Académica perdeu esse jogo por 9-1 e os novos emblemas foram considerados os culpados por esse desaire e nunca mais 
						foram utilizados.</p>

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">O clube de Coimbra passou então a jogar sem emblemas mas essa decisão 
						durou pouco tempo. Isto porque em Junho de 1928, e a pedido de Armando Sampaio, na altura dirigente da Briosa, Fernando Pimentel meteu mãos à obra e 
						desenhou o actual distintivo da Académica. No desenho final de Fernano Pimentel, a Instituição é apresentada com as iniciais do seu nome, AAC, e com 
						a silhueta negra da Cabra, principal símbolo da Universidade de Coimbra, sendo que estes elementos estão inscritos dentro de um losango que dá forma 
						ao mais bonito emblema que conhecemos.</p>
						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">Clube Académico de Coimbra, novo nome, novo símbolo...</p>
							<img class="resumoHistoriaImg" src="images/osimbolo4.jpg">

						<p style="hyphens: auto;-webkit-hyphens: auto;-ms-hyphens: auto;text-align:left">Durante o período em que a Académica existiu sob o nome de Clube 
						Académico de Coimbra (CAC), de 1974 a 1984, o símbolo que a representou também foi outro.</p>
					</div>

				</div>
			</div>
							
			<script>
			function show1(){
              document.getElementById('a1').style.display ='block';
			  document.getElementById('academicaPrincipal').style.paddingBottom ='50px';
			  document.getElementById('d1').style.boxShadow = "5px 5px 10px";
			  document.getElementById('a2').style.display ='none';
			  document.getElementById('d2').style.boxShadow = "none";
			  document.getElementById('a3').style.display ='none';
			  document.getElementById('d3').style.boxShadow = "none";
			  document.getElementById('a4').style.display ='none';
			  document.getElementById('d4').style.boxShadow = "none";
			}

            function show2(){
			  document.getElementById('a2').style.display ='block';
			  document.getElementById('academicaPrincipal').style.paddingBottom ='50px';
			  document.getElementById('d2').style.boxShadow = "5px 5px 10px";
			  document.getElementById('a1').style.display ='none';
			  document.getElementById('d1').style.boxShadow = "none";
			  document.getElementById('a3').style.display ='none';
			  document.getElementById('d3').style.boxShadow = "none";
			  document.getElementById('a4').style.display ='none';
			  document.getElementById('d4').style.boxShadow = "none";
            }

			function show3(){
			  document.getElementById('a3').style.display ='block';
			  document.getElementById('academicaPrincipal').style.paddingBottom ='50px';
			  document.getElementById('d3').style.boxShadow = "5px 5px 10px";
			  document.getElementById('a2').style.display ='none';
			  document.getElementById('d2').style.boxShadow = "none";
			  document.getElementById('a1').style.display ='none';
			  document.getElementById('d1').style.boxShadow = "none";
			  document.getElementById('a4').style.display ='none';
			  document.getElementById('d4').style.boxShadow = "none";
            }

			function show4(){
			  document.getElementById('a4').style.display ='block';
			  document.getElementById('academicaPrincipal').style.paddingBottom ='50px';
			  document.getElementById('d4').style.boxShadow = "5px 5px 10px";
			  document.getElementById('a2').style.display ='none';
			  document.getElementById('d2').style.boxShadow = "none";
			  document.getElementById('a3').style.display ='none';
			  document.getElementById('d3').style.boxShadow = "none";
			  document.getElementById('a1').style.display ='none';
			  document.getElementById('d1').style.boxShadow = "none";
            }

			var slideIndex = 1;
			showDivs(slideIndex);
			showDivs1(slideIndex);
			showDivs2(slideIndex);

			function plusDivs(n) {
			showDivs(slideIndex += n);
			}
			function plusDivs1(n) {
			showDivs1(slideIndex += n);
			}
			function plusDivs2(n) {
			showDivs2(slideIndex += n);
			}

			function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {slideIndex = 1}
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
			}
			function showDivs1(n) {
			var i;
			var x = document.getElementsByClassName("mySlides1");
			if (n > x.length) {slideIndex = 1}
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
			}
			function showDivs2(n) {
			var i;
			var x = document.getElementsByClassName("mySlides2");
			if (n > x.length) {slideIndex = 1}
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
			}

			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides3");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 3000); // Change image every 2 seconds
			}
			</script>

			
			</script>





		<!-- Footer -->
			<?php include('inc/footer.php')?>
		<!-- -->

		

	</body>
</html>