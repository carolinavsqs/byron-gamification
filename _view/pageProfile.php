<?php
require_once ("../_controller/check_login.php");
require_once ("../_controller/mysql_connect.php");
require_once ("../_controller/getProfileData.php");
require_once ("../_controller/helper.php");
?>
<!DOCTYPE html>
<html>
<head>
	<!--CSS-->
	<link rel="stylesheet" href="../_css/stylePageProfile.css" type="text/css">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
	<meta charset='utf-8'>
</head>
<body>
	<!-- PERFIL -->
	<div class="container_profile_bg"> <!-- usuário do perfil escolhe -->
		<div class="container_profile">
			<div class="container_profile_top">
				<a href="home.php" class="container_profile_top_button_left">home</a>
				<a href ="pageTaverna.php" class="container_profile_top_button_left">taverna</a>
				<a href="pageRanking.php" class="container_profile_top_button_left">hall da fama</a>
				<a href="pageGuild.php" class="container_profile_top_button_left">sobre o reino</a>
				<?php
				if(isDirector($_SESSION['byron_gamification']['user']) == '1')
					echo '<a  class="container_profile_top_button_left dropdown" href="submitXP.php?id='.$_SESSION['byron_gamification']['user'].'">distribuir XP</a>';
				
				if(isBardo($_SESSION['byron_gamification']['user']) == '1'){
					echo'<div class="container_profile_top_button_left dropdown">
							<div class="dropdown-toggle" data-toggle="dropdown">administrador<span class="caret"></span></div>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" style="color: #303030;" href="./registerForm.php">cadastrar usuário</a></li>
								<li><a class="dropdown-item" style="color: #303030;"><button class="container_profile_top_button_left" onclick="document.getElementById(\'edit_adm\').style.display=\'block\'">alterar Dados</a></li></button>
							</ul>
						</div>';
				}
				?>

				<a class="container_profile_top_button_right" href=<?php echo '../_view/pageProfile.php?id='.$_SESSION['byron_gamification']['user']?>>olá, <?php echo $_SESSION['byron_gamification']['user'];?>!</a>
			</div>
			<div class="container_profile_left">
				<div class="profile_img_bg_box">
					<div class="profile_img_bg">
						<img alt="" class="profile_img_inner" src="../<?php echo $userData['picture'] ?>">
					</div>
				</div>
				<div class="left_links_box">
					<a class="left_links_item left_links_item_border" href="#">Perícias</a>
					<a class="left_links_item left_links_item_border" href="#">Insígnias</a>
					<a class="left_links_item" href="#">Troféus</a>
				</div>
			</div>
			<div class="container_profile_right">
				<div class="container_profile_right_top">
					
					<div class="container_profile_right_top_left">
						<div class="profile_top_title"><?php echo $userData['user'];?></div>    
						<div class="profile_top_subtitle"><?php echo $userData['title']; ?></div>							
						<div class="profile_top_text" style="padding-top: 2%;">> NOME: <?php echo $userData['name']; ?></div>
						<div class="profile_top_text">> GÊNERO: <?php echo convert_genre_db_to_gui($userData['genero']); ?></div>
						<div class="profile_top_text">> MBTI: <?php echo $userData['mbti']; ?></div>
						<div class="profile_top_text">> ALINHAMENTO: <?php echo $userData['allignment']; ?></div>
						<div class="profile_top_text">> DATA DE NASCIMENTO: <?php echo convert_date_db_to_gui($userData['dateBirthday']); ?></div>
					</div>

					<div class="container_profile_right_top_right" style="flex-direction:column">
						<?php
						if($_SESSION['byron_gamification']['user'] == $userData['user']){
							echo '<div onclick="document.getElementById(\'edit\').style.display=\'block\'" class="container_profile_edit" style="width: 100%;height: 15px;">
								<span style="float:right">
									<i class="fa fa-cog" aria-hidden="true"></i>
								</span>
							</div>';
						}
						?>
						<div style="display: flex; justify-content: space-between">
							<div class="container_profile_crest">
								<?php
									imageClass($userData['class']);
								?>
								<div class="crest_container">
									<p class="profile_about_title">CLASSE</p>
								</div>
							</div>
							<div class="container_profile_crest">
								<?php
									imageGuild($userData['id_guild']);
								?>
								<div class="crest_container">
									<p class="profile_about_title">GUILDA</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container_profile_right_bottom">
					<div class="container_profile_right_bottom_left">
						<p class="profile_about_title" style="margin-top: 0%;">sobre mim</p>
						<div class="profile_about_box">
							<p class="profile_about"><?php echo $userData['about'] ?></p>    
						</div>
					</div>
					<div class="container_profile_right_bottom_right">
						<div style="text-align: right; font-size: 25px; margin-top: 4%;">xp total: <?php echo $userData['exp'] ?></div>
						<img src="_img/backgrounds/atributos.jpg" style="height:80%;width:auto; margin-top:10%; margin-left:20%; position:absolute; right: 0px; bottom:0px;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PERFIL -->
	<!--MODAL EDIT PERFIL-->
	<div id="edit" class="modal_login">
		<div class="modal_login_content" style="max-width:600px">
			<div class="modal_login_header"><br>
				<span onclick="document.getElementById('edit').style.display='none'" class="modal_login_button_internal modal_login_button_internal_close" title="Fechar">&times;</span>
				<i class="modal_header_text">Deixe em branco os campos que você não quer alterar.</i>
			</div>

			<form class="modal_login_form" action="../_controller/userModify.php" method="POST" enctype="multipart/form-data">
				<input class="modal_login_form_input" type="password" placeholder="Senha" name="new_pasw">
				<input class="modal_login_form_input" type="password" placeholder="Confirmar nova senha" name="new_pasw2">
				<input class="modal_login_form_input" type="date" placeholder="Data de Nascimento" name="new_dateBirthday">
				<input class="modal_login_form_input" type="text" placeholder="MBTI" name="new_mbti">
				<input class="modal_login_form_input" type="text" placeholder="Alinhamento" name="new_allignment">
				<input class="modal_login_form_input" type="text" placeholder="Sobre mim" name="new_about">
                <input class="modal_login_form_input" type="file" name="pic" placeholder="Insira sua Imagem de perfil" accept="image/*">
				<button class="modal_login_button_internal modal_login_button_internal_submit" type="submit">Alterar Perfil</button>
			</form>
		</div>
	</div>
	<!--END MODAL EDIT PERFIL-->

	<!--MODAL ADM PERFIL-->
	<div id="edit_adm" class="modal_login">
		<div class="modal_login_content" style="max-width:600px">
			<div class="modal_login_header"><br>
				<span onclick="document.getElementById('edit_adm').style.display='none'" class="modal_login_button_internal modal_login_button_internal_close" title="Fechar">&times;</span>
				<i class="modal_header_text">Deixe em branco os campos que você não quer alterar.</i>
			</div>

			<form class="modal_login_form" action="../_controller/adminModify.php" method="POST" >
				<input type='hidden' name='usrname' value='<?php echo $userData['user'];?>'/> 
				<input class="modal_login_form_input" type="password" placeholder="Senha" name="new_pasw">
				<input class="modal_login_form_input" type="password" placeholder="Confirmar nova senha" name="new_pasw2">
				<input class="modal_login_form_input" type="date" placeholder="Data de Nascimento" name="new_dateBirthday">
				<input class="modal_login_form_input" type="text" placeholder="MBTI" name="new_mbti">
				<input class="modal_login_form_input" type="text" placeholder="Alinhamento" name="new_allignment">
				<input class="modal_login_form_input" type="text" name="new_id_guild" placeholder="Guilda">
				<input class="modal_login_form_input" type="text" name="new_class" placeholder="Classe">
				<div class="d-inline-flex p-2 align-items-start center-content-around p-1"><h6>Usuário Inativo:</h2>
				<input class="modal_login_form_input_checkbox" type="checkbox" <?php if(isActive($userData['user']) == 1) echo "checked"; ?> name="active" value="1"></div>
				<div class="d-inline-flex p-2 align-items-start center-content-around p-1"><h6>Diretor:</h2>
				<input class="modal_login_form_input_checkbox" type="checkbox" <?php if(isDirector($userData['user']) == 1) echo "checked"; ?> name="director" value="1"></div>
				<button class="modal_login_button_internal modal_login_button_internal_submit" type="submit">Alterar Perfil</button>
			</form>
		</div>
	</div>
	<!--END MODAL ADM PERFIL-->


	<!-- JAVASCRIPT -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- END JAVASCRIPT -->
</body>
</html>