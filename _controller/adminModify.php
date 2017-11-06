<?php

session_start();
require_once 'mysql_connect.php';
require_once ("../_controller/check_login.php");
require_once ("../_controller/mysql_connect.php");
require_once ("../_controller/helper.php");


$sessionID       = $_POST['Usuario'];
$query_TEXT      = "SELECT * FROM `usuario` WHERE '".$sessionID."' = `user`";
$query_result    = mysqli_query($conn, $query_TEXT);
$linha           = mysqli_fetch_array($query_result);


if (!empty($_POST['new_name']))
    {
        $new_name       = $_POST['new_name'];
        $new_name       = stripslashes ($new_name);
        $new_name       = mysql_real_escape_string ($new_name);

    }
    else
        $new_name       =   $linha['name'];
            
    if (!empty($_POST['new_dateBirthday']))
    {
        $new_dateBirthday        = $_POST['new_dateBirthday'];
        $new_dateBirthday        = stripslashes ($new_dateBirthday);
        $new_dateBirthday        = mysqli_real_escape_string($conn,$new_dateBirthday);

    }
    else
        $new_dateBirthday        = $linha['name'];
    
    if (!empty($_POST['new_allignment']))
    {
        $new_allignment       = $_POST['new_allignment'];
        $new_allignment       = stripslashes ($new_allignment);
        $new_allignment       = mysqli_real_escape_string($conn,$new_allignment);
    }
    else
    {
        $new_allignment        = $linha['allignment'];
    }
    
    if (!empty($_POST['new_mbti']))
    {
        $new_mbti        = $_POST['new_mbti'];
        $new_mbti        = stripslashes ($new_mbti);
        $new_mbti        = mysqli_real_escape_string($conn,$new_mbti);
        
    }
    else
    {
        $new_mbti        = $linha['mbti'];
    }
            
    if (!empty($_POST['new_about']))
    {
        $new_about      = $_POST['new_about'];
        $new_about      = stripslashes ($new_about);
        $new_about      = mysqli_real_escape_string($conn,$new_about);
        
    }
    else
    {
        $new_about        = $linha["about"];
    }
        
    if (!empty($_POST['new_attributes']))
    {
        $new_attributes       = $_POST['new_attributes'];
        $new_attributes       = stripslashes ($new_attributes);
        $new_attributes       = mysqli_real_escape_string($conn,$new_attributes);
        
    }
    else
    {
        $new_attributes   = $linha['attributes'];
    }
        
    if (!empty($_POST['new_expertise']))
    {
        $new_expertise   = $_POST['new_expertise'];
        $new_expertise   = stripslashes ($new_expertise);
        $new_expertise   = mysqli_real_escape_string($conn,$new_expertise);
        
    }
    else
    {

        $new_expertise   = $linha['expertise'];
    }
        
    if (!empty($_POST['new_title']))
    {
        $new_title  = $_POST['new_title'];
        $new_title  = stripslashes ($new_title);
        $new_title  = mysqli_real_escape_string($conn,$new_title);
        
    }
    else
    {
        $new_title  = $linha['title'];
    }

    if (!empty($_POST['new_user']))
    {
        $new_user       = $_POST['new_user'];
        $new_user       = stripslashes ($new_user);
        $new_user       = mysqli_real_escape_string($conn,$new_user);
        
    }
    else
        $new_user       = $linha["user"];
    }
    if (!empty($_POST['new_id_guild']))
    {
        $new_id_guild       = $_POST['new_id_guild'];
        $new_id_guild       = stripslashes ($new_id_guild);
        $new_id_guild       = mysqli_real_escape_string($conn,$new_id_guild);
        
    }
    else
        $new_id_guild       = $linha['id_guild'];
    }
    if (!empty($_POST['new_level']))
    {
        $new_level       = $_POST['new_level'];
        $new_level       = stripslashes ($new_level);
        $new_level       = mysqli_real_escape_string($conn,$new_level);

    }
    else
        $new_level       = $linha['level'];
    }
    if (!empty($_POST['new_exp']))
    {
        $new_exp       = $_POST['new_exp'];
        $new_exp       = stripslashes ($new_exp);
        $new_exp       = mysqli_real_escape_string($conn,$new_exp);
        
    }
    else
        $new_exp       = $linha['exp'];
    

    $my_user          = $linha['user'];


    $query_name = "UPDATE usuario SET name='".$new_name."',dateBirthday='".$new_dateBirthday."', allignment='".$new_allignment."', mbti='".$new_mbti."',about='".$new_about."',attributes='".$new_attributes."', expertise='".$new_expertise."',title='".$new_title."',user='".$new_user."',id_guild= '".$new_id_guild."',level = '".$new_level."',exp = '".$new_exp."' WHERE  user = '".$my_user."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
        header("location:../_view/home.php");
            echo "<script> 
                alert('Editado com sucesso!');
                window.location.href='../index.php';
            </script>";
        mysqli_close ($conn);
        
        exit;
    }else{
        echo "<script> 
        alert('Erro ao editar!');
        window.location.href='../index.php';
        </script>";
    }
?>
