<?php
    require_once ("../_controller/check_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--CSS-->
        <link rel="stylesheet" href="../_css/styleHome.css" type="text/css">
        <link rel="stylesheet" href="../_css/simple-scrollbar.css" type="text/css"></script>
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- JQUERY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../_js/smoothscroll.js"></script> 
        <script type="text/javascript" src="../_js/simple-scrollbar.min.js"></script> 
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
        <meta charset='utf-8'>
        <title>Home</title>
    </head>
<body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul id="navbar_left" class="navbar-nav mr-auto">
                <a href=<?php echo '../_view/pageProfile.php?id='.$_SESSION['byron_gamification']['user']?> >Ver perfil</a>
            </ul>
            <ul id="navbar_left" class="navbar-nav mr-auto">
                <a href='../_view/registerForm.php'>Adicionar novo membro</a>
            </ul>
            <ul id="navbar_left" class="navbar-nav mr-auto">
                <a href='../_controller/logout.php'>Clique aqui para deixar a cidade!</a>
            </ul>
        </div>
    </nav>
    <!-- FIM NAVBAR -->
    <div class="container_principal_section">
        <div class="row">
        <div class="columns">
            <div class="container_column_section_header">
                Distribuição de XP
            </div>
            <div class="container_column_section" ss-container>
                <p>>damasio atribuiu +5xp para jotaVe
                </p>
                <p>>Munhoz atribuiu +5xp para Alexx
                </p>
                <p>>Óboli atribuiu +5xp para Brenin
                </p>
                <p>>Lars atribuiu +5xp para Lari
                </p>
                <p>>Wel atribuiu +5xp para Bruna
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="container_column_section_header">
                Alterações em geral
            </div>
            <div class="container_column_section" ss-container>
                <p>>carol-vasques4 alterou sua foto de perfil
                </p>
                <p>>damasio adicionou conquista para Sineek
                </p>
                <p>>jotaVe modificou informações de perfil
                </p>
                <p>>Aeróboli alterou seu Sobre
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="container_column_section_header">
                O que há de novo?
            </div>
            <div class="container_column_section" ss-container>
                <p>>carol-vasques4 adicionou patch note
                </p>
                <p>>damasio adicionou funcionalidade de usuário
                </p>
                <p>>jotaVe adicionou novo membro
                </p>
                <p>>carol-vasques alterou a classe de Sineek
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="container_column_section_header">
               Cemitério
            </div>
            <div class="container_column_section" ss-container>
                <p>>damasio removeu uma página
                </p>
                <p>>carol-vasques4 removeu elemento de perfil
                </p>
                <p>>jotaVe removeu texto da página ....
                </p>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>