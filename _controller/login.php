<?php
require_once 'mysql_connect.php';

if (!empty($_POST['usrname']) or !empty($_POST['psw'])){
         $input_usuario    = $_POST['usrname'];
		 $input_password   = $_POST['psw'];
}
else
{
    echo"Os campos devem ser preenchidos";
    exit;
}   

$input_usuario     		= stripslashes($input_usuario);
$input_password         = stripslashes($input_password);
$input_usuario   		= mysqli_real_escape_string($conn,$input_usuario);
$input_password       	= mysqli_real_escape_string($conn,$input_password);

$input_password         = hash("sha256", $input_password);

$queryText = "SELECT * FROM `usuario` WHERE `user` LIKE '".$input_usuario."' AND `password` LIKE '".$input_password."'";
$queryResult = mysqli_query ($conn, $queryText);

if ((!$queryResult) or ((mysqli_num_rows ($queryResult)) < 1))
{
    
    echo "<script> 
        alert('Usuario ou Senha incorretos!');
        window.location.href='../index.php';
    </script>";
}
else
{
    $userData = mysqli_fetch_array($queryResult);
    session_start ();
    $_SESSION['byron_gamification']['user'] = $userData['user'] ;
    $_SESSION['byron_gamification']['name'] = $userData['name'] ;
    $_SESSION['byron_gamification']['class'] = $userData['class'] ;
    $_SESSION['byron_gamification']['exp'] = $userData['exp'] ;
    $_SESSION['byron_gamification']['id_guild'] = $userData['id_guild'] ;
    $_SESSION['byron_gamification']['picture'] = $userData['picture'] ;
    $_SESSION['byron_gamification']['allignment'] = $userData['allignment'] ;
    $_SESSION['byron_gamification']['about'] = $userData['about'] ;
    $_SESSION['byron_gamification']['mbti'] = $userData['mbti'] ;
    $_SESSION['byron_gamification']['dateBirthday'] = $userData['dateBirthday'] ;


    
    
    header('Location: ../_view/home.php');
    session_encode();
}


?>
	
