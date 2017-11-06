<?php

session_start();
require_once 'mysql_connect.php';
require_once ("../_controller/check_login.php");
require_once ("../_controller/mysql_connect.php");
require_once ("../_controller/helper.php");


$sessionID      = $_SESSION['byron_gamification']['user'];
$query_TEXT     = "SELECT * FROM `usuario` WHERE `user`='".$sessionID."'";
$query_result   = mysqli_query($conn, $query_TEXT);
$linha          = mysqli_fetch_array($query_result);


if(!empty($_POST['new_exp']))
{
    $new_exp       = $_POST['new_exp'];
    $new_exp       = stripslashes ($new_exp);
    $new_exp       = mysqli_real_escape_string($conn,$new_exp);
    
    $exp_total     = $linha['exp'] + $new_exp;
    
}

    $query_name = "UPDATE usuario SET exp ='".$exp_total."' WHERE user = '".$sessionID."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
        $_SESSION['byron_gamification']['exp']     = $new_exp ;
        echo "<script> alert('deu certo filhão!');
            window.location.href='../_view/home.php';
        </script>";
        mysqli_close ($conn);

        exit;
    }
    else{
        echo "<script> alert('deu erado filhão!');
            window.location.href='../_view/home.php';
        </script>";
    }
?>
