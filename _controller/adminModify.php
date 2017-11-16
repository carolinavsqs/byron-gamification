<?php

session_start();
require_once 'mysql_connect.php';
require_once ("../_controller/check_login.php");
require_once ("../_controller/mysql_connect.php");
require_once ("../_controller/helper.php");


$sessionID       = $_POST['usrname'];
$query_TEXT      = "SELECT * FROM `usuario` WHERE '".$sessionID."' = `user`";
$query_result    = mysqli_query($conn, $query_TEXT);
$linha           = mysqli_fetch_array($query_result);


    if (!empty($_POST['new_dateBirthday']))
    {
        $new_dateBirthday        = $_POST['new_dateBirthday'];
        $new_dateBirthday        = stripslashes ($new_dateBirthday);
        $new_dateBirthday        = mysqli_real_escape_string($conn,$new_dateBirthday);
        
    }
    else
        $new_dateBirthday        = $linha['dateBirthday'];

    if (!empty($_POST['new_id_guild']))
    {
        $new_id_guild       = $_POST['new_id_guild'];
        $new_id_guild       = stripslashes ($new_id_guild);
        $new_id_guild       = mysqli_real_escape_string($conn,$new_id_guild);
        
    }
    else
        $new_id_guild       = $linha['id_guild'];
    
    if (!empty($_POST['new_class']))
    {
        $new_class       = $_POST['new_class'];
        $new_class       = stripslashes ($new_class);
        $new_class       = mysqli_real_escape_string($conn,$new_class);

    }
    else
        $new_class       = $linha['class'];
    
    
    if (!empty($_POST['new_allignment']))
    {
        $new_allignment       = $_POST['new_allignment'];
        $new_allignment       = stripslashes ($new_allignment);
        $new_allignment       = mysqli_real_escape_string($conn,$new_allignment);
        
    }
    else
        $new_allignment       = $linha['allignment'];
    
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

    
    $new_notActive = (isset($_POST['active']) ? 1 : 0);

    $new_isDirector = (isset($_POST['director']) ? 1 : 0);
    

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
    

    $my_user          = $linha['user'];


    $query_name = "UPDATE usuario SET id_guild='".$new_id_guild."',class='".$new_class."',password='".$password."',mbti='".$new_mbti."',allignment='".$new_allignment."',dateBirthday='".$new_dateBirthday."',notActive='".$new_notActive."',isDirector='".$new_isDirector."' WHERE  user = '".$my_user."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)  
    {
        echo "<script> alert('Alterado com Sucesso!');
            window.location.href='../_view/home.php';
        </script>";
        mysqli_close ($conn);
        
        exit;
    }else{
        echo "<script> alert('Falha ao editar!');
            window.location.href='../_view/home.php';
        </script>";
    }

?>
