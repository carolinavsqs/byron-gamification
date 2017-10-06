<!DOCTYPE html>
<html>
	<head>
		<!-- CSS -->
        <link rel="stylesheet" href="_css/styleIndex.css" type="text/css">
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!--FONT AWESOME -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<meta charset='utf-8'>
	</head>
	<body>	
		<!-- CARROSSEL -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
					<!-- LOGIN BUTTON TELA PRINCIPAL -->
					<div onclick="document.getElementById('login').style.display='block'" class="container_login_button_external">
						<span class="fa fa-user-o container_login_button_external_img" aria-hidden="true"></span>
						<span class="container_login_button_external_text">login</div>
					</div>
					<!-- END LOGIN BUTTON TELA PRINCIPAL -->
				<div class="carousel-item active" style="background-image: url('_img/backgrounds/1.jpg')">
				</div>
				<div class="carousel-item" style="background-image: url('_img/backgrounds/2.jpg')">
					
				</div>
				<div class="carousel-item" style="background-image: url('_img/backgrounds/3.jpg')">
					
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- END CARROSSEL -->
		
		<!-- MODAL LOGIN -->
		 <div id="login" class="modal">
			<div class="modal_content" style="max-width:600px">
				<div class="header_login"><br>
					<span onclick="document.getElementById('login').style.display='none'" class="login_button_internal login_button_internal_close" title="Fechar">&times;</span>
					<img src="img_avatar4.png" style="width:30%" class="img_login">
					<p class="header_login_text">"- Alto lá, viajante! - disse a guarda, em tom intimidador. - Identifique-se!"</p>
				</div>
	
					<form class="form_login" action="_controller/login.php" method="POST">
						<input class="form_login_input form_login_input_name" type="text" placeholder="Nome de Usuário" name="usrname" required>
						<input class="form_login_input" type="password" placeholder="Senha" name="psw" required>
						<button class="login_button_internal login_button_internal_submit" type="submit">PASSAR PELOS PORTÕES</button>

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
