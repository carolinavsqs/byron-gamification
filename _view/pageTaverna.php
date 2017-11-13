<?php
 	require_once ("../_controller/check_login.php");
	require_once ("../_controller/mysql_connect.php");

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

			<div class="row justify-content-center mt-4">
				<div class="member-box team_members">
					<div class="row justify-content-center p-2">
						<h3>Nome das equipes</h3>
					</div>
					<div class="row">
						<div class="d-flex flex-wrap">
							<?php 
								for($j=0;$j<5;$j++)
								{
									for($i=0;$i<5;$i++)
									{
										echo'<div class="col-4 col-md-4"><img class="img-fluid user_img" src="../_img/'.'FDP'.'.jpeg" alt="FDP.jpg"></div>';
									}
								}
							?>
						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<body>


	
</body>
</html>