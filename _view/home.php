        <?php
            require_once ("../_controller/check_login.php");
            include "../_controller/helper.php";
        ?>

        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <!--BOOTSTRAP-->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
                <!-- JQUERY -->
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <script type="text/javascript" src="../_js/smoothscroll.js"></script> 
                <script type="text/javascript" src="../_js/simple-scrollbar.min.js"></script> 

    <!--            JQueryBoostrap-->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script     src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

                <!-- FONTS -->
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
                <meta charset='utf-8'>
                 <!--CSS-->
                <link rel="stylesheet" href="../_css/styleHome.css" type="text/css">
                <link rel="stylesheet" href="../_css/simple-scrollbar.css" type="text/css">
                <title>Home</title>
            </head>
        <body>
            <div class="d-flex home_page_container">
                <div class="wrapper col-md-9 mr-auto ml-auto p-0">
            <!-- NAVBAR -->
                    <nav id="navbar" class="navbar navbar-expand-lg  navbar-dark bg-dark justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul id="navbar_left" class="navbar-nav mr-auto nav_menu justify-content-around">
                        <li class="nav-item"> 
                            <a class="nav-link" href=<?php echo '../_view/pageProfile.php?id='.$_SESSION['byron_gamification']['user']?>  > Ver perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='../_view/registerForm.php'>Adicionar novo membro</a>          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='../_controller/logout.php'>Clique aqui para deixar a cidade!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='../_view/pageRanking.php'>Rank!</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- FIM NAVBAR -->
            <div class="container_principal_section container-fluid">
                <div class="row">
        <!--        <div class="columns">-->
                    <div class="d-flex flex-column col-md-3">
                    <div class="container_column_section_header">
                        Distribuição de XP
                    </div>
                    <div class="container_column_section" ss-container>
                        <?php 
                            recupera_xp();
                        ?>

                    </div>
                </div>
                <div class="d-flex flex-column col-md-3">
                    <div class="container_column_section_header">
                        Alterações em geral
                    </div>
                    <div class="container_column_section" ss-container>
                        <?php 
                            recupera_edit();
                        ?>
                    </div>
                </div>
                <div class="d-flex flex-column col-md-3">
                    <div class="container_column_section_header">
                        O que há de novo?
                    </div>
                    <div class="container_column_section" ss-container>
                        <?php
                            recupera_add();
                        ?>
                    </div>
                </div>
                <div class="d-flex flex-column col-md-3">
                    <div class="container_column_section_header">
                       Cemitério
                    </div>
                    <div class="container_column_section" ss-container>
                        <?php
                            recupera_remove();
                        ?>
                    </div>
                </div>
                </div>
            </div>
          </div>  
            </div>

        </body>
        </html>