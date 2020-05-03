<!DOCTYPE html>
<html>
	<head>
		<title>HTML 5</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./app/views/css/estilos.css">
		<script src="./app/views/js/scripts.js"></script>
	<head>
	<body>
		<main class="wrapper">
			<header class="cx cab">
				<div class="cx1" onmouseover="msg()" >
					<img   src="./app/views/imagens/tux.png" width="90">
				</div>
				<div class="cx2">
					<h1>Monta Já</h1>
				</div>
				<div class="cx3">caixa-3</div>
			</header>
			
			<!--CAIXA DE MENUS -->
			<div class="cx bx box1" id="bx1"><img width="50" src="./app/views/imagens/camera.png"></div>
			<div class="cx bx box2" id="bx2"><img width="50"src="./app/views/imagens/microphone.png"></div>
			<div class="cx bx box3" id="bx3"><img width="50" src="./app/views/imagens/pen.png"></div>
			<div class="cx box4" id="bx4"><img width="50" src="./app/views/imagens/book.png"></div>
			<nav class="cx menu" id="mainMenu">
				<h3 id="h3Menu">Menu</h3>
					<ul>
						<li id="l1" onclick="loadDoc('frmCadImagem')">Cadastrar</li>
						<li id="l2" onclick="loadDoc('form2')" >Consultar</li>
						<li id="l3">Cadastrar</li>
						<li id="l4">Consultar</li>
						<li id="l5">Cad Montador</li>
					</ul>
			</nav>
			<!--CONTAINER PRINCIPAL -->
			<main class="cx conteudo" id="mainPrinciapal"></main>
			<!--<aside class="cx sidebar">Sidebar</aside>-->
			<footer class="cx rodape">Developed by elineltonleite@gmail.com</footer>
			

		</main>
		<script src="./app/views/js/scripts.js"></script>
	</body>
</html>