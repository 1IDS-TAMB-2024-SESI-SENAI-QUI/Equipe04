<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="UTF-8">
			<title>Quimicando</title>
			<link rel="shortcut icon" type="image/png" href="química_site.png">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
			<link rel="stylesheet" type="text/css" href="quimica_style2.css">
		</head>
        <body>
            <nav>
                <div>
                    <a href="quimica.html"><img id="logo" src="quimicando.jpeg"></a>
                </div>
                <div class="cima">
					<ul class="barra">
						<li class="qui"><a href="quimicavideo.html" class="active">Recomendações</a></li>
						<li class="qui"><a href="quimicaex.php" class="active">Exercícios</a></li>
						<li class="qui"><a href="quimicajg.php" class="active">Jogo</a></li>
                        <li class="pdf"><a href="Funções Inorgânicas - Química.pdf" class="active">Download PDF</a></li>
					</ul>
				</div>
            </nav>           
            <main>
				<div>
					<h1 id="ex">Exercícios</h1>
					<br/><br/>
					<div class="sob">
						<form action="" method="POST"id="pergunta1" action="#pergunta1">
							<p class="jogo">Sabemos que diversos íons atuam em nosso corpo desempenhando as mais variadas funções. Um exemplo desses íons é o cálcio, que...?</p>
							<input type="radio" id="a" name="pergunta1" value="a">
							<label for="a">atua na formação de ossos e dentes</label><br>
							<input type="radio" id="b" name="pergunta1" value="b">
							<label for="b">está presente na composição de hormônios da tireoide</label><br>
							<input type="radio" id="c" name="pergunta1" value="c">
							<label for="c">atua na digestão</label><br>
							<input type="radio" id="d" name="pergunta1" value="d">
							<label for="d">é um componente extremamente importante das hemácias</label><br>
							<input type="radio" id="e" name="pergunta1" value="e">
							<label for="e">faz parte da bomba cálcio-potássio</label><br>
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>		
					
						<br>
					
						<br>
					<div class="ec">	
						<?PHP 
							if(isset($_POST["pergunta1"])){
								if($_POST["pergunta1"] == "a"){
									echo "<p>Parabéns! Você acertou 😀</p>";
									echo "<img src='OIP-removebg-preview (2).png'>";
								}
								else{
									echo "<p>Você errou. Tente novamente! 😭</p>";
									echo "<img src='OIP-removebg-preview (1).png'>";
								}
							}
						?>
					</div>
					</form>
					<hr>
					<div class="sob">
						<form method="POST" id="pergunta2" action="#pergunta2">
							<p class="jogo">A soda cáustica (NaOH) se comporta diante da fenolftaleína do mesmo modo que:</p>
							<input type="radio" id="a" name="pergunta2" value="a">
							<label for="a">o amoníaco</label><br>
							<input type="radio" id="b" name="pergunta2" value="b">
							<label for="b">a água da chuva</label><br>
							<input type="radio" id="c" name="pergunta2" value="c">
							<label for="c">a urina</label><br>
							<input type="radio" id="d" name="pergunta2" value="d">
							<label for="d">os refrigerantes gaseificados</label><br>
							<input type="radio" id="e" name="pergunta2" value="e">
							<label for="e">o suco de laranja</label><br>
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>
					
					<br>
					
						<br>
					<div class="ec">
						<?PHP 
							if(isset($_POST["pergunta2"])){
								if($_POST["pergunta2"] == "a"){
									echo "<p>Parabéns! Você acertou 😀</p>";
									echo "<img src='OIP-removebg-preview (2).png'>";
								}
								else{
									echo "<p>Você errou. Tente novamente! 😭</p>";
									echo "<img src='OIP-removebg-preview (1).png'>";
								}
							}
						?>
					</div>
					</form>
					<hr></hr>
					<div class="sob">
						<form method="POST" id="pergunta3" action="#pergunta3">
							<p class="jogo">Os ácidos HClO4, H2MnO4, H3PO3, H4Sb2O7, quanto ao número de hidrogênios ionizáveis, podem ser classificados em:</p>
							<input type="radio" id="a" name="pergunta3" value="a">
							<label for="a">monoácido, diácido, triácido, tetrácido</label><br>
							<input type="radio" id="b" name="pergunta3" value="b">
							<label for="b"> monoácido, diácido, triácido, triácido</label><br>
							<input type="radio" id="c" name="pergunta3" value="c">
							<label for="c"> monoácido, diácido, diácido, tetrácido</label><br>
							<input type="radio" id="d" name="pergunta3" value="d">
							<label for="d"> monoácido, monoácido, diácido, triácido</label><br>
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>
					
					<br>
					
						<br>
					<div class="ec">
						<?PHP 
							if(isset($_POST["pergunta3"])){
								if($_POST["pergunta3"] == "c"){
									echo "<p>Parabéns! Você acertou 😀</p>";
									echo "<img src='OIP-removebg-preview (2).png'>";
								}
								else{
									echo "<p>Você errou. Tente novamente! 😭</p>";
									echo "<img src='OIP-removebg-preview (1).png'>";
								}
							}
						?>
					</div>
					</form>
					<hr></hr>
					<div class="sob">
						<form method="POST" id="pergunta4" action="#pergunta4">
							<p class="jogo">Para combater a acidez estomacal causada pelo excesso de ácido clorídrico, costuma-se ingerir um antiácido. Das substâncias abaixo, encontradas no cotidiano das pessoas, a mais indicada para combater a acidez é:</p>
							<input type="radio" id="a" name="pergunta4" value="a">
							<label for="a">refrigerante</label><br>
							<input type="radio" id="b" name="pergunta4" value="b">
							<label for="b"> suco de laranja</label><br>
							<input type="radio" id="c" name="pergunta4" value="c">
							<label for="c"> água com limão</label><br>
							<input type="radio" id="d" name="pergunta4" value="d">
							<label for="d"> vinagre</label><br>
							<input type="radio" id="e" name="pergunta4" value="e">
							<label for="e">  leite de magnésia</label><br>
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>
					
					<br>
					
						<br>
					<div class="ec">
						<?PHP 
							if(isset($_POST["pergunta4"])){
								if($_POST["pergunta4"] == "e"){
									echo "<p>Parabéns! Você acertou 😀</p>";
									echo "<img src='OIP-removebg-preview (2).png'>";
								}
								else{
									echo "<p>Você errou. Tente novamente! 😭</p>";
									echo "<img src='OIP-removebg-preview (1).png'>";
								}
							}
						?>
					</div>
					</form>
					<hr></hr>
					<div class="sob">
						<form id="pergunta5" action="#pergunta5" method="POST">
							<p class="jogo">Os corais, o mármore e as conchas possuem a substância carbonato de cálcio (cuja fórmula é CaCO3) em sua composição. Quimicamente, trata-se de um sal, porém apresenta uma diferente classificação com relação ao caráter dos sais. Assim, podemos afirmar que, nesse caso, esse sal tem caráter:</p>
							<input type="radio" id="a" name="pergunta5" value="a">
							<label for="a"> Ácido</label><br>
							<input type="radio" id="b" name="pergunta5" value="b">
							<label for="b"> Básico</label><br>
							<input type="radio" id="c" name="pergunta5" value="c">
							<label for="c"> Neutro</label><br>
							<input type="radio" id="d" name="pergunta5" value="d">
							<label for="d"> nda</label><br>
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>
					
					<br>
					
						<br>
					<div class="ec">
						<?PHP 
							if(isset($_POST["pergunta5"])){
								if($_POST["pergunta5"] == "b"){
									echo "<p>Parabéns! Você acertou 😀</p>";
									echo "<img src='OIP-removebg-preview (2).png'>";
								}
								else{
									echo "<p>Você errou. Tente novamente! 😭</p>";
									echo "<img src='OIP-removebg-preview (1).png'>";
								}
							}
						?>
					</div>
					</form>
					<br><br>
				</div>
			</main>
			<footer>
				<div id="footer_content">
                    <div id="footer_contacts">
                        <img src="quimicando.jpeg">
                    
                        <div id="footer_social_media">
                            <a href="https://www.instagram.com/" class="footer-link" id="instagram">
                                <i class="fa-brands fa-instagram" style="color: #fff;"></i>
                            </a>

                            <a href="https://www.facebook.com/" class="footer-link" id="facebook">
                                <i class="fa-brands fa-facebook-f" style="color: #fff;"></i>
                            </a>

                            <a href="https://www.whatsapp.com/" class="footer-link" id="whatsapp">
                                <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="footer-list">
                        <li>
                            <h3>Blog</h3>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Ciências</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Diversão</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Estudos</a>
                        </li>
                    </ul>

                    <ul class="footer-list">
                        <li>
                            <a href="quimicavideo.html" class="footer-link">Vídeos</a>
                        </li>
                        <li>
                            <a href="quimicaex.php" class="footer-link">Exercícios</a>
                        </li>
                        <li>
                            <a href="quimicajg.php" class="footer-link">Jogo</a>
                        </li>
                        <li>
                            <a href="Funções Inorgânicas - Química.pdf" class="footer-link">Download PDF</a>
                        </li>
                    </ul>

                    <div id="footer_subscribe">
                        <h3>Se inscreve</h3>
                        <p id="escrito">Entre com seu e-mail para receber notificações e novas atualizações</p>

                        <div id="input_group">
                            <form method="post" action="#">
                            <input type="email" id="email">
                            <button>
                                <i class="fa-regular fa-envelope"></i>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="footer_copyright">
                    &copy; 2024 todos os direitos reservados
                </div>
			</footer>
        </body>
    </html>