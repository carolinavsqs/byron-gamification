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



    if (!empty($_POST['new_id_guild']))
    {
        $new_id_guild       = $_POST['new_id_guild'];
        $new_id_guild       = stripslashes ($new_id_guild);
        $new_id_guild       = mysqli_real_escape_string($conn,$new_id_guild);
        
    }
    else
        $new_id_guild       = $linha['id_guild'];
    }
    if (!empty($_POST['new_class']))
    {
        $new_class       = $_POST['new_class'];
        $new_class       = stripslashes ($new_class);
        $new_class       = mysqli_real_escape_string($conn,$new_class);

    }
    else
        $new_class       = $linha['class'];
    }
    if (!empty($_POST['new_notActive']))
    {
        $new_notActive       = $_POST['new_notActive'];
        $new_notActive       = stripslashes ($new_notActive);
        $new_notActive       = mysqli_real_escape_string($conn,$new_notActive);
        
    }
    else
        $new_notActive       = $linha['notActive'];
    

    $my_user          = $linha['user'];


    $query_name = "UPDATE usuario SET id_guild='".$new_id_guild."',class='".$new_class."',notActive='".$new_notActive."' WHERE  user = '".$my_user."'";

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
