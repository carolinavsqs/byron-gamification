<?php
    require_once ("../_controller/check_login.php");
    require_once ("../_controller/mysql_connect.php");
    require_once ("../_controller/helper.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--CSS-->
        <link rel="stylesheet" href="../_css/styleRanking.css" type="text/css">
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
    </head>
    <body>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul id="navbar_left" class="navbar-nav mr-auto">
                <a class="nav-link" href="home.php">Notícias</a>
                <a class="nav-link" href='#'>Taverna</a>
                <a class="nav-link" href='pageGuild.php'>Reino</a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a  class="nav-link" href="pageProfile.php">Perfil</a>
            </ul>
        </div>
    </nav>
        <div class="container_background">
            <div class="container_intro_text">
                <div class="container_title">RANKING
                </div>
                <div class="container_description" ss-container>
                    <?php
                        $sql = "SELECT `user`,`name`,`exp` FROM `usuario` ORDER BY `exp` DESC";
                            $result = mysqli_query($conn,$sql);

                            if( !$result ){
                              echo 'SQL Query Failed';
                            }else{

                              $rank = 0;
                              $last_score = false;
                              $rows = 0;
                              echo "<table>
                                <tr>
                                    <th>POSIÇÃO</th>
                                    <th>NOME</th>
                                    <th>EXP</th>
                                </tr>
                                <tr></tr>";
                              while($row = mysqli_fetch_array($result)){
                                $rows++;
                                if( $last_score!= $row['exp'] ){
                                  $last_score = $row['exp'];
                                  $rank = $rows;
                                }
                                echo "
                                <tr>
                                            <th><pre>    ".$rank."           </pre></th>
                                            <th><pre><a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a>           </pre></th>
                                            <th><pre>".$row['exp']."</pre></th>
                                          </tr>
                                        ";
                                     
                              }
                              echo "</table>";
                            }

                        ?>
                </div>
            </div>
        </div>
    </body>
</html>