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
				<h1 id="e1">Adivinhe</h1>
				<br/>
				<div class="sob">
					<form method="POST"id="jogo1" action="#jogo1">
						<h2 class="jogo1">Escolha o símbolo que se refere ao elemento<h3 id="car">Carbono</h3></h2>
						<input type="radio" id="a" name="jogo1" value="a">
						<label for="a">K</label><br>
						<input type="radio" id="b" name="jogo1" value="b">
						<label for="b">P</label><br>
						<input type="radio" id="c" name="jogo1" value="c">
						<label for="c">S</label><br>
						<input type="radio" id="d" name="jogo1" value="d">
						<label for="d">Na</label><br>
						<input type="radio" id="e" name="jogo1" value="e">
						<label for="e">F</label><br>
						<input type="radio" id="f" name="jogo1" value="f">
						<label for="f">Li</label><br>
						<input type="radio" id="g" name="jogo1" value="g">
						<label for="g">Ca</label><br>
						<input type="radio" id="h" name="jogo1" value="h">
						<label for="h">Mn</label><br>
						<input type="radio" id="i" name="jogo1" value="i">
						<label for="i">Sn</label><br>
						<input type="radio" id="j" name="jogo1" value="j">
						<label for="j">Au</label><br>
						<input type="radio" id="k" name="jogo1" value="k">
						<label for="k">Ag</label><br>
						<input type="radio" id="l" name="jogo1" value="l">
						<label for="l">Hg</label><br>
						<input type="radio" id="m" name="jogo1" value="m">
						<label for="m">H</label><br>
						<input type="radio" id="n" name="jogo1" value="n">
						<label for="n">He</label><br>
						<input type="radio" id="o" name="jogo1" value="o">
						<label for="o">C</label><br>
						<input type="radio" id="p" name="jogo1" value="p">
						<label for="p">N</label><br>
						<input type="radio" id="q" name="jogo1" value="q">
						<label for="q">Ni</label><br>
						<input type="radio" id="r" name="jogo1" value="r">
						<label for="r">Sr</label><br>
						
						<input type="submit" name="btn" id="btn" value="responder!">
				</div>
					
						<br>
					
						<br>
					<div class="ec">
						<?PHP 
							if(isset($_POST["jogo1"])){
								if($_POST["jogo1"] == "o"){
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
						<form method="POST" id="jogo2" action="#jogo2">
							<h2 class="jogo1">Escolha o símbolo que se refere ao elemento<h3 id="car">Fósforo</h3></h2>
							<input type="radio" id="a" name="jogo2" value="a">
							<label for="a">K</label><br>
							<input type="radio" id="b" name="jogo2" value="b">
							<label for="b">P</label><br>
							<input type="radio" id="c" name="jogo2" value="c">
							<label for="c">S</label><br>
							<input type="radio" id="d" name="jogo2" value="d">
							<label for="d">Na</label><br>
							<input type="radio" id="e" name="jogo2" value="e">
							<label for="e">F</label><br>
							<input type="radio" id="f" name="jogo2" value="f">
							<label for="f">Li</label><br>
							<input type="radio" id="g" name="jogo2" value="g">
							<label for="g">Ca</label><br>
							<input type="radio" id="h" name="jogo2" value="h">
							<label for="h">Mn</label><br>
							<input type="radio" id="i" name="jogo2" value="i">
							<label for="i">Sn</label><br>
							<input type="radio" id="j" name="jogo2" value="j">
							<label for="j">Au</label><br>
							<input type="radio" id="k" name="jogo2" value="k">
							<label for="k">Ag</label><br>
							<input type="radio" id="l" name="jogo2" value="l">
							<label for="l">Hg</label><br>
							<input type="radio" id="m" name="jogo2" value="m">
							<label for="m">H</label><br>
							<input type="radio" id="n" name="jogo2" value="n">
							<label for="n">He</label><br>
							<input type="radio" id="o" name="jogo2" value="o">
							<label for="o">C</label><br>
							<input type="radio" id="p" name="jogo2" value="p">
							<label for="p">N</label><br>
							<input type="radio" id="q" name="jogo2" value="q">
							<label for="q">Ni</label><br>
							<input type="radio" id="r" name="jogo2" value="r">
							<label for="r">Sr</label><br>
							
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>
					
						<br>
					
						<br>
					<div class="ec">	
						<?PHP 
							if(isset($_POST["jogo2"])){
								if($_POST["jogo2"] == "b"){
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
						<form method="POST" id="jogo3" action="#jogo3">
							<h2 class="jogo1">Escolha o símbolo que se refere ao elemento<h3 id="car">Hélio</h3></h2>
							<input type="radio" id="a" name="jogo3" value="a">
							<label for="a">K</label><br>
							<input type="radio" id="b" name="jogo3 value="b">
							<label for="b">P</label><br>
							<input type="radio" id="c" name="jogo3 value="c">
							<label for="c">S</label><br>
							<input type="radio" id="d" name="jogo3" value="d">
							<label for="d">Na</label><br>
							<input type="radio" id="e" name="jogo3" value="e">
							<label for="e">F</label><br>
							<input type="radio" id="f" name="jogo3" value="f">
							<label for="f">Li</label><br>
							<input type="radio" id="g" name="jogo3" value="g">
							<label for="g">Ca</label><br>
							<input type="radio" id="h" name="jogo3" value="h">
							<label for="h">Mn</label><br>
							<input type="radio" id="i" name="jogo3" value="i">
							<label for="i">Sn</label><br>
							<input type="radio" id="j" name="jogo3" value="j">
							<label for="j">Au</label><br>
							<input type="radio" id="k" name="jogo3" value="k">
							<label for="k">Ag</label><br>
							<input type="radio" id="l" name="jogo3" value="l">
							<label for="l">Hg</label><br>
							<input type="radio" id="m" name="jogo3" value="m">
							<label for="m">H</label><br>
							<input type="radio" id="n" name="jogo3" value="n">
							<label for="n">He</label><br>
							<input type="radio" id="o" name="jogo3" value="o">
							<label for="o">C</label><br>
							<input type="radio" id="p" name="jogo3" value="p">
							<label for="p">N</label><br>
							<input type="radio" id="q" name="jogo3" value="q">
							<label for="q">Ni</label><br>
							<input type="radio" id="r" name="jogo3" value="r">
							<label for="r">Sr</label><br>
							
							<input type="submit" name="btn" id="btn" value="responder!">
					</div>
					
						<br>
					
						<br>
					<div class="ec">	
						<?PHP 
							if(isset($_POST["jogo3"])){
								if($_POST["jogo3"] == "n"){
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