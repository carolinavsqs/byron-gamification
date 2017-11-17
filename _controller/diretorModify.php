<?php

session_start();
require_once 'mysql_connect.php';
require_once ("../_controller/check_login.php");
require_once ("../_controller/mysql_connect.php");
require_once ("../_controller/helper.php");
require_once ("../_controller/log.php");


$sessionID      = $_POST['usrname'];
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
        echo '<script> alert("Experiencia atualizada!");
            window.location.href="../_view/submitXP.php?id='.$_SESSION['byron_gamification']['user'].'";
        </script>';


        $mensagem = "mudou ".$new_exp." de xp para";
        $type = 'xp';
        $user = $_SESSION['byron_gamification']['user'];
        $userModify = $linha['user'];
        saveLog($mensagem, $type, $user, $userModify);
        mysqli_close ($conn);  
        exit;
    }
    else{
        echo "<script> alert('Não foi possive!');
            window.location.href='../_view/submitXP.php';
        </script>";
    }
?>
