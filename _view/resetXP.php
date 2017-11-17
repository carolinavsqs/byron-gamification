<?php
require_once ("../_controller/check_login.php");
require_once ("../_controller/mysql_connect.php");
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
                                <li><a class="dropdown-item text-center" style="color: #303030;" href="./resetXP.php">resetar xp</a></li>
                            </ul>
                        </div>';
                }
                ?>
 
                <a class="container_profile_top_button_right"></a>
            </div>
            <div class="container-fluid bg-white">
                <div class="row justify-content-center p-4">
                    <h4>Deseja mesmo resetar o XP de todos os membros da byron?</h4>
                </div>
                <div class="row justify-content-center p-4">
                    <form action="">
                        <input type="submit" class="btn btn-danger" value="RESETAR XP">
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <!-- END PERFIL -->
 
 
    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- END JAVASCRIPT -->
    </body>
</html>

