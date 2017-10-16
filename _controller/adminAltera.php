<?php

require_once 'mysql_connect.php';
include "log.php";

$sessionID = //Informação do front end

$query_TEXT = "SELECT * FROM `usuario` WHERE '".$sessionID."' = `user`";
$query_result = mysqli_query($conn, $query_TEXT);

$linha = mysqli_fetch_array($query_result);




if (!empty($_POST['new_name']))
    {
        $new_name       = $_POST['new_name'];
        $new_name       = stripslashes ($new_name);
        $new_name       = mysql_real_escape_string ($new_name);
    
        $message = "Editou o nome";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_name       =   $linha['name'];
            
    if (!empty($_POST['new_dateBirthday']))
    {
        $new_dateBirthday        = $_POST['new_dateBirthday'];
        $new_dateBirthday        = stripslashes ($new_dateBirthday);
        $new_dateBirthday        = mysql_real_escape_string ($new_dateBirthday);
        
        $message = "Editou a data de nascimento";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_dateBirthday        = $linha['name'];
    
    if (!empty($_POST['new_allignment']))
    {
        $new_allignment       = $_POST['new_allignment'];
        $new_allignment       = stripslashes ($new_allignment);
        $new_allignment       = mysql_real_escape_string ($new_allignment);
        
        $message = "Editou Alinhamento";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($linha["allignment"]))
            $new_allignment        = $linha['allignment'];
        else
            $new_allignment        = NULL;
    }
    
    if (!empty($_POST['new_mbti']))
    {
        $new_mbti        = $_POST['new_mbti'];
        $new_mbti        = stripslashes ($new_mbti);
        $new_mbti        = mysql_real_escape_string ($new_mbti);
        
        $message = "Editou mbti";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($linha["mbti"]))
            $new_mbti        = $linha["mbti"];
        else
            $new_mbti        = NULL;
    }
            
    if (!empty($_POST['new_about']))
    {
        $new_about      = $_POST['new_about'];
        $new_about      = stripslashes ($new_about);
        $new_about      = mysql_real_escape_string ($new_about);
        
        $message = "Editou o Sobre";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($linha["about"]))
            $new_about        = $linha["about"];
        else
            $new_about        = NULL;
    }
        
    if (!empty($_POST['new_attributes']))
    {
        $new_attributes       = $_POST['new_attributes'];
        $new_attributes       = stripslashes ($new_attributes);
        $new_attributes       = mysql_real_escape_string ($new_attributes);
        
        $message = "Editou os atributos";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($linha["attributes"]))
            $new_attributes   = $linha["attributes"];
        else
            $new_attributes   = NULL;
    }
        
    if (!empty($_POST['new_expertise']))
    {
        $new_expertise   = $_POST['new_expertise'];
        $new_expertise   = stripslashes ($new_expertise);
        $new_expertise   = mysql_real_escape_string ($new_expertise);
        
        $message = "Editou as Especialidades";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($linha["expertise"]))
            $new_expertise   = $linha["expertise"];
        else
            $new_expertise   = NULL;
    }
        
    if (!empty($_POST['new_title']))
    {
        $new_title  = $_POST['new_title'];
        $new_title  = stripslashes ($new_title);
        $new_title  = mysql_real_escape_string ($new_title);
        
        $message = "Editou o título";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
    {
        if (!empty($linha["title"]))
            $new_title  = $linha["title"];
        else
            $new_title  = NULL;
    }

    if (!empty($_POST['new_user']))
    {
        $new_user       = $_POST['new_user'];
        $new_user       = stripslashes ($new_user);
        $new_user       = mysql_real_escape_string ($new_user);
        
        $message = "Editou o nome de usuário";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_user       = $linha["user"];
    }
    if (!empty($_POST['new_id_guild']))
    {
        $new_id_guild       = $_POST['new_id_guild'];
        $new_id_guild       = stripslashes ($new_id_guild);
        $new_id_guild       = mysql_real_escape_string ($new_id_guild);
        
        $message = "Editou a guild";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_id_guild       = $linha["id_guild"];
    }
    if (!empty($_POST['new_level']))
    {
        $new_level       = $_POST['new_level'];
        $new_level       = stripslashes ($new_level);
        $new_level       = mysql_real_escape_string ($new_level);
        
        $message = "Editou o Nível";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_level       = $linha["level"];
    }
    if (!empty($_POST['new_exp']))
    {
        $new_exp       = $_POST['new_exp'];
        $new_exp       = stripslashes ($new_exp);
        $new_exp       = mysql_real_escape_string ($new_exp);
        
        $message = "Editou a xp em + .$new_exp.";
        $type = "xp";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_exp       = $linha["exp"];
    

    $my_user          = $linha["user"];


    $query_name = "UPDATE `usuario` SET `name`='".$new_name."',`dateBirthday`='".$new_dateBirthday."', `allignment`='".$new_allignment."', `mbti`='".$new_mbti."',`about`='".$new_about."',`attributes`='".$new_attributes."', `expertise`='".$new_expertise."',`title`='".$new_title."',`user`='".$new_user."',`id_guild`= '".$new_id_guild."',`level` = '".$new_level."',`exp` = '".$new_exp."',  WHERE  user = '".$my_user."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
	    header("location:../_view/home.php");
	    mysqli_close ($conn);
	    exit;
	}

?>
