<?php
session_start();
require_once 'mysql_connect.php';

$sql = "SELECT `name`,`exp` FROM `usuario` ORDER BY `exp` DESC";
	$result = mysqli_query($conn,$sql);

	if( !$result ){
	  echo 'SQL Query Failed';
	}else{

	  $rank = 0;
	  $last_score = false;
	  $rows = 0;

	  while($row = mysqli_fetch_array($result)){
	    $rows++;
	    if( $last_score!= $row['exp'] ){
	      $last_score = $row['exp'];
	      $rank = $rows;
	    }
	    echo "Rank ".$rank." is ".$row['name']." com exp ".$row['exp']."<br>";
	  }
	}

?>