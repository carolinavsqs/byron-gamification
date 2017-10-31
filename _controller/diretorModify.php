<?php

session_start();
require_once 'mysql_connect.php';
include "log.php";

$sessionID = $_POST['usrname'];

$query_TEXT = "SELECT * FROM `usuario` WHERE '".$sessionID."' = `user`";
$query_result = mysqli_query($conn, $query_TEXT);

$linha = mysqli_fetch_array($query_result);


if(!empty($_POST['new_exp']))
{
    $new_exp       = $_POST['new_exp'];
    $new_exp       = stripslashes ($new_exp);
    $new_exp       = mysqli_real_escape_string($conn,$new_exp);
    
    $exp_total     = $new_exp."+".$linha['exp'];
	
    $message = "XP Alterada em + .$new_exp.";
    $type = "xp";
    $user = $_SESSION['byron_gamification']['user'];
    saveLog($message, $type, $user);
}

    $query_name = "UPDATE `usuario` SET `exp`='".$exp_total."',  WHERE  user = '".$sessionID."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
	    header("location:../_view/home.php");
	    mysqli_close ($conn);
	    exit;
	}

?>
