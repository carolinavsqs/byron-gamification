<?php
    require_once ("../_controller/check_login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- CSS -->
		<link rel="stylesheet" href="../_css/styleRegisterForm.css" type="text/css">
		<link rel="stylesheet" href="../_css/simple-scrollbar.css" type="text/css"></script>
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="../_js/simple-scrollbar.min.js"></script> 
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<meta charset='utf-8'>
	</head>
	<body>
	<div class="register_form_bg" style="background-image: url('../_img/backgrounds/10.jpg');">
		<div class="register_form_container">
			<div class="register_form_content" ss-container>
			<!-- ideia: carrossel que personaliza os próximos quadros de acordo com a resposta, imagem de fundo, fazer as setas, recarregar página -->
				<form class="register_form" action="../_controller/new_user.php" method="POST">
					<div class="register_form_title">Olá, guardião! Pronto para adicionar um novo membro às guildas?</div>
					<div class="register_form_text">> Com qual gênero ele(a) se identifica?</div>
					<input class="register_form_input" type="text" name="Nick" placeholder="F/M">
					<div class="register_form_text">> Quem é o(a) aventureiro(a)?</div>
					<input class="register_form_input" type="text" name="nome" placeholder="Nome Completo">
					<div class="register_form_text">> Como ele(a) será conhecido(a) em nosso reino?</div>
					<input class="register_form_input" type="text" name="usrname" placeholder="Nickname">
					<div class="register_form_text">> Qual sua data de nascimento?</div>
					<input class="register_form_input" type="date" name="data" placeholder="AAAA/MM/DD">
					<div class="register_form_text">> Qual a classe do(a) nosso(a) aventureiro(a)?</div>
					<input class="register_form_input" type="text" name="class" placeholder="Ex: Bardo">
					<div class="register_form_text">> E para qual guilda ele(a) foi selecionado(a)?</div>
					<input class="register_form_input" type="text" name="guild" placeholder="1/2/3/4">
					<div class="register_form_title">Parece que uma das guildas fará uma festa esta noite! Gostaria de confirmar a entrada do novo membro?</div>
					<button class="register_form_submit" type="submit">fazer o registro no livro da guilda</button>
				</form>
			</div>
		</div>
	</div>
		<!-- JAVASCRIPT -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- END JAVASCRIPT -->
	</body>
</html>