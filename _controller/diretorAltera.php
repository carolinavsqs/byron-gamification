<?php

require_once 'mysql_connect.php';

$sessionID = //Informação do front end

$query_TEXT = "SELECT * FROM `usuario` WHERE '".$sessionID."' = `user`";
$query_result = mysqli_query($conn, $query_TEXT);

$linha = mysqli_fetch_array($query_result);


if (empty($_POST['new_exp']))
{
    $new_exp       = $_POST['new_exp'];
    $new_exp       = stripslashes ($new_exp);
    $new_exp       = mysql_real_escape_string ($new_exp);
    
    $exp_total     = $new_exp."+".$linha['exp'];
}

    $query_name = "UPDATE `usuario` SET `exp` = '".$new_total."',  WHERE  user = '".$my_user."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
	    header("location:../_view/home.php");
	    mysqli_close ($conn);
	    exit;
	}

?>
