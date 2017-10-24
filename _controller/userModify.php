<?php

session_start();
require_once 'mysql_connect.php';
include "log.php";


if (!$_SESSION["login_status"])
{
    echo "<script> 
        alert('Faça login para continuar!');
        window.location.href='../index.php';
    </script>";
    exit;
}

if (!empty($_POST['new_name']))
    {
        $new_name       = $_POST['new_name'];
        $new_name       = stripslashes ($new_name);
        $new_name       = mysql_real_escape_string ($new_name);
    
        $message = "Alterou nome";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_name       = $_SESSION["name"];
            
    if (!empty($_POST['new_dateBirthday']))
    {
        $new_dateBirthday        = $_POST['new_dateBirthday'];
        $new_dateBirthday        = stripslashes ($new_dateBirthday);
        $new_dateBirthday        = mysql_real_escape_string ($new_dateBirthday);
        
        $message = "Alterou data de nascimento";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_dateBirthday        = $_SESSION["dateBirthday"];
    
    if (!empty($_POST['new_allignment']))
    {
        $new_allignment       = $_POST['new_allignment'];
        $new_allignment       = stripslashes ($new_allignment);
        $new_allignment       = mysql_real_escape_string ($new_allignment);
        
        $message = "Alterou Alinhamento";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_allignment       = $_SESSION["allignment"];
    
    if (!empty($_POST['new_mbti']))
    {
        $new_mbti        = $_POST['new_mbti'];
        $new_mbti        = stripslashes ($new_mbti);
        $new_mbti        = mysql_real_escape_string ($new_mbti);
        
        $message = "Alterou MBTI";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($_SESSION["mbti"]))
            $new_mbti        = $_SESSION["mbti"];
        else
            $new_mbti        = NULL;
    }
            
    if (!empty($_POST['new_about']))
    {
        $new_about      = $_POST['new_about'];
        $new_about      = stripslashes ($new_about);
        $new_about      = mysql_real_escape_string ($new_about);
        
        $message = "Alterou o Sobre";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($_SESSION["about"]))
            $new_about        = $_SESSION["about"];
        else
            $new_about        = NULL;
    }
        
    if (!empty($_POST['new_attributes']))
    {
        $new_attributes       = $_POST['new_attributes'];
        $new_attributes       = stripslashes ($new_attributes);
        $new_attributes       = mysql_real_escape_string ($new_attributes);
        
        $message = "Alterou atributos";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($_SESSION["attributes"]))
            $new_attributes   = $_SESSION["attributes"];
        else
            $new_attributes   = NULL;
    }
        
    if (!empty($_POST['new_expertise']))
    {
        $new_expertise   = $_POST['new_expertise'];
        $new_expertise   = stripslashes ($new_expertise);
        $new_expertise   = mysql_real_escape_string ($new_expertise);
        
        $message = "Alterou as Especialidades";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($_SESSION["expertise"]))
            $new_expertise   = $_SESSION["expertise"];
        else
            $new_expertise   = NULL;
    }
        
    if (!empty($_POST['new_title']))
    {
        $new_title  = $_POST['new_title'];
        $new_title  = stripslashes ($new_title);
        $new_title  = mysql_real_escape_string ($new_title);
        
        $message = "Alterou o título";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($_SESSION["new_title"]))
            $new_title  = $_SESSION["new_title"];
        else
            $new_title  = NULL;
    }
    
    if(!empty($_POST['new_pasw']) and $_POST['new_pass1']== $_POST['new_pass2'])
    {
        $new_pass       = $_POST['new_pass1'];
        $new_pass       = stripslashes($new_pass);
        $new_pass       = mysql_real_escape_string($new_pass);
        
        $message = "Senha Alterada";
        $type = "add";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        $new_pass = $_SESSION["password"];
    }

     $my_user          = $_SESSION["user"];

    $query_name = "UPDATE `usuario` SET `name`='".$new_name."',`dateBirthday`='".$new_dateBirthday."', `allignment`='".$new_allignment."', `mbti`='".$new_mbti."',`about`='".$new_about."',`attributes`='".$new_attributes."', `expertise`='".$new_expertise."',`title`='".$new_title."',`pass`='".$new_pass."' WHERE  user = '".$my_user."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
	{
	    $_SESSION['byron_gamification']['name'] 			= $new_name ;
	    $_SESSION['byron_gamification']['dateBirthday']		= $new_dateBirthday ;
	    $_SESSION['byron_gamification']['allignment'] 		= $new_allignment ;
	    $_SESSION['byron_gamification']['mbti']				= $new_mbti ;
	    $_SESSION['byron_gamification']['attributes']		= $new_attributes ;
	    $_SESSION['byron_gamification']['title'] 			= $new_title ;
	    $_SESSION['byron_gamification']['expertise'] 		= $unew_expertise ;
	    $_SESSION['byron_gamification']['about'] 			= $new_about ;


	    header("location:../_view/home.php");
	    mysqli_close ($conn);
	    exit;
	}

?>