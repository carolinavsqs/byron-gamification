<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- CSS -->
        <link rel="stylesheet" href="_css/styleIndex.css" type="text/css">
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="_js/smoothscroll.js"></script> 
		<!--FONT AWESOME -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
		<meta charset='utf-8'>
	</head>
	<body>	
		<!-- TELA INICIAL -->
			<div class="screen_one" style="background-image: url('_img/backgrounds/5.jpg');">
				<div class="container_info">
					<div class="container_info_title">VOCÊ CHEGOU.</div>
					<div class="container_info_description">Depois de horas e horas de árdua caminhada, com um último gole de água restante em seu cantil, após ter enfrentado inúmeras criaturas ferozes, você finalmente avistou o que pareceu ser um vilarejo. Você não sabe ao certo o que poderia encontrar ao seguir em frente, mas, com certeza, seria melhor do que os infortúnios que passara naquela floresta. Ou será que não? Bom, só há um jeito de descobrir.</div>
					<a id="info_text1" class="container_info_button smoothScroll" href="#adventure"><div id="info_signal1">></div> continuar a aventura. você não chegou até aqui para desistir agora!</a>
					<a id="info_text2" class="container_info_button" href="#goback"><div id="info_signal2">></div> voltar para a floresta e tentar achar outro caminho</a>
				</div>
			</div>
		<!-- END TELA INICIAL -->
		<!-- CARROSSEL -->
		<div id="adventure" class="carousel_position"></div>
		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-inner">
                    <?php if(!isset($_SESSION['byron_gamification']['user'])): ?>
                        <!-- LOGIN BUTTON TELA PRINCIPAL -->
                        <div onclick="document.getElementById('login').style.display='block'" class="container_login_button_external">
                            <span class="fa fa-user-o container_login_button_external_img" aria-hidden="true"></span>
                            <span class="container_login_button_external_text">login</div>
                        </div>
                    <?php else: ?>
                        <div class="container_login_button_external">
                            <span class="fa fa-user-o container_login_button_external_img" aria-hidden="true"></span>
                            <span class="container_login_button_external_text"><a href="_view/home.php">Home</a></div>
                        </div>
                    <?php endif; ?>


					<!-- END LOGIN BUTTON TELA PRINCIPAL -->
				<div class="carousel-item active" style="background-image: url('_img/backgrounds/1.jpg');">
					<!-- PRIMEIRA TELA -->
					<div class="container_info">
						<div class="carousel_big_button">explore<br>as<br>guildas</div>
					</div>
				</div>
				<div class="carousel-item" style="background-image: url('_img/backgrounds/2.jpg')">
					<!-- SEGUNDA TELA -->
					<div class="container_info">
						<div class="carousel_big_button">descubra mais sobre as classes</div>
					</div>
				</div>
				<div class="carousel-item" style="background-image: url('_img/backgrounds/3.jpg')">
					<!-- TERCEIRA TELA -->
					<div class="container_info">
						<div class="carousel_big_button">conheça os desafios do reino</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" style="top: 100vh; height: 100%; filter: brightness(70%);">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next" style="top: 100vh; height: 100%; filter: brightness(70%);">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- END CARROSSEL -->
		
		<!-- MODAL LOGIN -->
		 <div id="login" class="modal_login">
			<div class="modal_login_content" style="max-width:600px">
				<div class="modal_login_header"><br>
					<span onclick="document.getElementById('login').style.display='none'" class="modal_login_button_internal modal_login_button_internal_close" title="Fechar">&times;</span>
					<img src="img_avatar4.png" style="width:30%" class="modal_login_img">
					<p class="modal_login_header_text">"- Alto lá, viajante! - disse a guarda, em tom intimidador, no momento em que você se aproximou dos portões do vilarejo. - Identifique-se!"</p>
				</div>
	
				<form class="modal_login_form" action="_controller/login.php" method="POST">
					<input class="modal_login_form_input modal_login_form_input_name" type="text" placeholder="Nome de Usuário" name="usrname" required>
					<input class="modal_login_form_input" type="password" placeholder="Senha" name="psw" required>
					<button class="modal_login_button_internal modal_login_button_internal_submit" type="submit">passar pelos portões</button>
				</form>
			</div>
		  </div>
		<!-- END MODAL LOGIN -->
		
		<!-- JAVASCRIPT -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- END JAVASCRIPT -->
	</body>
</html>
