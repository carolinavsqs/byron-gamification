<?php
    require_once ("../_controller/check_login.php");
    require_once ("../_controller/mysql_connect.php");
    require_once ("../_controller/helper.php");
 
    $sql = "SELECT  `user`,`name`,`class`,`notActive` FROM `usuario`";
    for($i=0;$i<8;$i++)
    {
    	$result = mysqli_query($conn,$sql);
        if($i == 0)
            echo"<h1>Bardo</h1>";
        else if($i == 1)
            echo"<h1>Mago</h1>";
        else if($i == 2)
            echo"<h1>Guerreiro</h1>";
        else if($i == 3)
            echo"<h1>Paladino</h1>";
        else if($i == 4)
            echo"<h1>Ladino</h1>";
        else if($i == 5)
            echo"<h1>Arqueiro</h1>";
        else if($i == 6)
            echo"<h1>Alquimista</h1>";
        else if($i == 7)
        	echo"<h1>Não Ativo</h1>";
 
        while($row = mysqli_fetch_array($result)){

			if(!$row['notActive']){
	
	            if(strtolower($row['class']) == "bardo" && $i == 0){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	            else if(strtolower($row['class']) == "mago" && $i == 1){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	            else if(strtolower($row['class']) == "guerreiro" && $i == 2){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	            else if(strtolower($row['class']) == "alquimista" && $i == 6){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	            else if(strtolower($row['class']) == "paladino" && $i == 3){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	            else if(strtolower($row['class']) == "ladino" && $i == 4){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	            else if(strtolower($row['class']) == "arqueiro" && $i == 5){
	                echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";
	            }
	        }
	        else if($i == 7){
	        	 echo "<a href='../_view/pageProfile.php?id=".$row['user']."'>".$row['name']."</a><br>";

	        }
	    }
	
	}

?>