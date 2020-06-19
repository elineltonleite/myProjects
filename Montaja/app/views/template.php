<!DOCTYPE html>
<html>
	<head>
		<title>Monta Já</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./app/views/css/estilos.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@515&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<script src="./app/views/js/scripts.js"></script>
	<head>
	<body>
		<main class="wrapper">
			<header class="cx cab">
				<div class="cx1">
					<img src="./app/views/imagens/tux.png" width="90">
				</div>
				<div class="cx2">
					<h1>MontaJá</h1>
				</div>
				<!--<div class="cx3">caixa-3</div>-->
			</header>
			
			<!--CAIXA DE MENUS -->
			<div class="cx bx box1" id="bx1">
				<img width="50" src="./app/views/imagens/camera.png">
			</div>
			<div class="cx bx box2" id="bx2">
				<img width="50"src="./app/views/imagens/microphone.png">
			</div>
			<div class="cx bx box3" id="bx3">
				<img width="50" src="./app/views/imagens/pen.png">
			</div>
			<div class="cx box4 col-4_6">
				<!--<img width="50" src="./app/views/imagens/book.png">-->
			</div>
			
			<nav class="cx menu" id="mainMenu">
				<h3 id="h3Menu">Menu</h3>
					<ul>
						<li id="l1" onclick="loadDoc('frmCadImagem')">Cadastrar</li>
						<li id="l2" onclick="loadDoc('frmConsImagem')" >Consultar</li>
						<li id="l3" onclick="loadDoc('frmCadAudio')">Cadastrar</li>
						<li id="l4" onclick="loadDoc('frmConsAudio')">Consultar</li>
						<li id="l5" onclick="loadDoc('frmCadUser')">Cad Usuário</li>
					</ul>
			</nav>
			<!--CONTAINER PRINCIPAL -->
			<main class="cx conteudo" id="mainPrincipal">
			<?php
				if(isset($_REQUEST['frm'])){
					include_once'./app/views/forms/'.$_REQUEST['frm'].'.php';
				}
			?>
			</main>
			<!--<aside class="cx sidebar">Sidebar</aside>-->
			<footer class="cx rodape">Developed by elineltonleite@gmail.com</footer>			
		</main>
		<script src="./app/views/js/scripts.js"></script>
	</body>
</html>