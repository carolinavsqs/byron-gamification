<?php
 	require_once ("../_controller/check_login.php");
	require_once ("../_controller/mysql_connect.php");
	require_once ("../_controller/helper.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../_css/styleTaverna.css" type="text/css">
	<!-- JAVASCRIPT -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<!-- END JAVASCRIPT -->

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	
	<!--FONT AWESOME -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title></title>

	<link rel="stylesheet" href="../_css/styleTaverna.css">

</head>
<div class="container_taverna d-flex">
	<div class="container_taverna_screen col-12 col-md-9 mr-auto ml-auto p-0">
		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark ml-auto mr-auto aling-items-baseline">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav d-flex justify-content-around">
					<li class="nav-item active"><a href="home.php" class="container_taverna_item">HOME</a></li>
					<li class="nav-item "><a href="pageTaverna.php" class="container_taverna_item">TAVERNA</a></li>
					<li class="nav-item "><a href="pageRanking.php" class="container_taverna_item">HALL DA FAMA</a></li>
					<li class="nav-item"><a href="pageGuild.php" class="container_taverna_item">SOBRE O REINO</a></li>
				</ul>
			</div>
		</nav>
		<!-- END NAVBAR -->

		<div class="container-fluid">
			<div class="row justify-content-center mt-4">
				<h1>MEMBROS</h1>
			</div>
            <div class="row justify-content-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Classes
                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a id="dropdown-alq" class="dropdown-item" href="#">Alquilmistas</a>
                            <a id="dropdown-arq" class="dropdown-item" href="#">Arqueiros</a>
                            <a id="dropdown-bar" class="dropdown-item" href="#">Bardos</a>
                            <a id="dropdown-gue" class="dropdown-item" href="#">Guerreiros</a>
                            <a id="dropdown-lad" class="dropdown-item" href="#">Ladinos</a>
                            <a id="dropdown-mag" class="dropdown-item" href="#">Magos</a>
                            <a id="dropdown-pal" class="dropdown-item" href="#">Paladinos</a>
                        </div>
                </div>
            </div>
			<div class="row justify-content-center mt-4">
                <div id="alquimistas" class="row justify-content-center" hidden>
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Alquimistas</div> 
                    </div>
                    <div class="row flex-wrap">
                        <?php allMembers("Alquimista")?>
                    </div>
                </div>
                <div id="arqueiros" class="row justify-content-center" hidden="true">
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Arqueiros</div> 
                    </div>
                    <div class="row flex-wrap">
                        <?php allMembers("Arqueiro")?>
                    </div>
                </div>
                <div id="bardos" class="row justify-content-center" hidden="true">
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Bardos</div> 
                    
	                    <div class="row flex-wrap">
	                        <?php allMembers("Bardo")?>
	                    </div>
                    </div>
                </div>
                <div id="guerreiros" class="row justify-content-center" hidden="true">
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Guerreiros</div> 
                    </div>
                    <div class="row flex-wrap">
                        <?php allMembers("Guerreiro")?>
                    </div>
                </div>
                <div id="ladinos" class="row justify-content-center" hidden="true">
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Ladinos</div> 
                    </div>
                    <div class="row flex-wrap">
                        <?php allMembers("Ladino")?>
                    </div>
                </div>
                <div id="magos" class="row justify-content-center" hidden="true">
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Magos</div> 
                    </div>
                    <div class="row flex-wrap">
                        <?php allMembers("Mago")?>
                    </div>
                </div>
                <div id="paladinos" class="row justify-content-center" hidden="true">
                    <div class="row justify-content-center display-grid">
                       <div class="classe-title">Paladinos</div> 
                    </div>
                    <div class="row flex-wrap">
                        <?php allMembers("Paladino")?>
                    </div>
                </div>
			</div>
		</div>
	</div>

</div>

    <script type="text/javascript">
        $(document).ready(function(){
            var last = "";
            $("#dropdown-alq").click(function(){
                $(last).attr("hidden","true");
                $("#alquimistas").removeAttr("hidden");
                last = "#alquimistas";
            });
            $("#dropdown-arq").click(function(){
                $(last).attr("hidden","true");
                $("#arqueiros").removeAttr("hidden");
                last = "#arqueiros";
            });
            $("#dropdown-bar").click(function(){
                $(last).attr("hidden","true");
                $("#bardos").removeAttr("hidden");
                last = "#bardos";
            });
            $("#dropdown-gue").click(function(){
                $(last).attr("hidden","true");
                $("#guerreiros").removeAttr("hidden");
                last = "#guerreiros";
            });
            $("#dropdown-lad").click(function(){
                $(last).attr("hidden","true");
                $("#ladinos").removeAttr("hidden");
                last = "#ladinos";
            });
            $("#dropdown-mag").click(function(){
                $(last).attr("hidden","true");
                $("#magos").removeAttr("hidden");
                last = "#magos";
            });
            $("#dropdown-pal").click(function(){
                $(last).attr("hidden","true");
                $("#paladinos").removeAttr("hidden");
                last = "#paladinos";
            });
            
        });
    </script>
<body>


	
</body>
</html>