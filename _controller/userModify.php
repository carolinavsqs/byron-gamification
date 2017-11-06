<?php

session_start();
require_once 'mysql_connect.php';
include "log.php";

$sessionID      = $_SESSION['byron_gamification']['user'];
$query_TEXT     = "SELECT * FROM `usuario` WHERE '".$sessionID."' = `user`";
$query_result   = mysqli_query($conn, $query_TEXT);
$linha          = mysqli_fetch_array($query_result);


            
    if (!empty($_POST['new_dateBirthday']))
    {
        $new_dateBirthday        = $_POST['new_dateBirthday'];
        $new_dateBirthday        = stripslashes ($new_dateBirthday);
        $new_dateBirthday        = mysqli_real_escape_string($conn,$new_dateBirthday);
    }
    else
        $new_dateBirthday        = $_SESSION['byron_gamification']['dateBirthday'];
    
    if (!empty($_POST['new_allignment']))
    {
        $new_allignment       = $_POST['new_allignment'];
        $new_allignment       = stripslashes ($new_allignment);
        $new_allignment       = mysqli_real_escape_string($conn,$new_allignment);
    }
    else
        $new_allignment       = $_SESSION['byron_gamification']['allignment'];
    
    if (!empty($_POST['new_mbti']))
    {
        $new_mbti        = $_POST['new_mbti'];
        $new_mbti        = stripslashes ($new_mbti);
        $new_mbti        = mysqli_real_escape_string($conn,$new_mbti);
    }
    else
    {
        $new_mbti        = $_SESSION['byron_gamification']['mbti'];
    }
            
    if (!empty($_POST['new_about']))
    {
        $new_about      = $_POST['new_about'];
        $new_about      = stripslashes ($new_about);
        $new_about      = mysqli_real_escape_string($conn,$new_about);
        
        $message = "Alterou seu about";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        $new_about      = $_SESSION['byron_gamification']['about'];
    }

    if(!empty($_POST['new_pasw']) and $_POST['new_pasw']== $_POST['new_pasw2'])
    {
        $new_pass       = $_POST['new_pasw'];
        $new_pass       = stripslashes($new_pass);
        $new_pass       = mysqli_real_escape_string($conn,$new_pass);
        $password       = hash ("sha256", $new_pass);
        
    }
    else{
         $password      = $linha['password'];
    }


    $query_name = "UPDATE usuario SET dateBirthday='".$new_dateBirthday."', allignment='".$new_allignment."', mbti='".$new_mbti."',about='".$new_about."',password ='".$password."' WHERE  user = '".$sessionID."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
	{
	    $_SESSION['byron_gamification']['dateBirthday']		= $new_dateBirthday ;
	    $_SESSION['byron_gamification']['allignment'] 		= $new_allignment ;
	    $_SESSION['byron_gamification']['mbti']				= $new_mbti ;
	    $_SESSION['byron_gamification']['about'] 			= $new_about ;


	    echo "<script> alert('Alterado com Sucesso!');
            window.location.href='../_view/home.php';
        </script>";
	    mysqli_close ($conn);
	    exit;
	}
    else{
        echo "<script> alert('Ocorreu um erro. Tente novamente!');
            window.location.href='../_view/home.php';
        </script>";
    }

?>