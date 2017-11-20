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
        
        $message = "Alterou sua data de nascimento";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user,$user);
    }
    else
        $new_dateBirthday        = $linha['dateBirthday'];
    
    if (!empty($_POST['new_allignment']))
    {
        $new_allignment       = $_POST['new_allignment'];
        $new_allignment       = stripslashes ($new_allignment);
        $new_allignment       = mysqli_real_escape_string($conn,$new_allignment);
        
        $message = "Alterou seu allignment";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user,$user);
    }
    else
        $new_allignment       = $linha['allignment'];
    
    if (!empty($_POST['new_mbti']))
    {
        $new_mbti        = $_POST['new_mbti'];
        $new_mbti        = stripslashes ($new_mbti);
        $new_mbti        = mysqli_real_escape_string($conn,$new_mbti);
        
        $message = "Alterou seu mbti";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user,$user);
    }
    else
    {
        $new_mbti        = $linha['mbti'];
    }

    if(!empty($_FILES['pic']['name'])){
            
        $arquivo_tmp = $_FILES['pic']['tmp_name'];
        $nome = $_FILES['pic']['name'];

        $extensao = pathinfo($nome, PATHINFO_EXTENSION );
        $extensao = strtolower($extensao);
     
        if(@strstr('.jpg;.jpeg;.gif;.png',$extensao)){
            $novoNome = uniqid (time()) . "." . $extensao;
     
            $destino = '../_img/profile_pic/'.$novoNome;
     
            if (@move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                
                $new_pic = '_img/profile_pic/'.$novoNome;
                $message = "Alterou sua imagem";
                $type = "edit";
                $user = $_SESSION['byron_gamification']['user'];
                saveLog($message, $type, $user,$user);
            }
            else{
                echo '<script> alert("Imagem muito grande!"");
                    window.location.href="../_view/pageProfile.php?id='.$linha['user'].'";
                </script>';
            }
        }
        else{
            echo '<script> alert("Apenas imagens jpg,jpeg,gif ou png!"");
                    window.location.href="../_view/pageProfile.php?id='.$linha['user'].'";
                </script>';
        }
    }else{
        $new_pic = $linha['picture'];
    }

            
    if (!empty($_POST['new_about']))
    {
        $new_about      = $_POST['new_about'];
        $new_about      = stripslashes ($new_about);
        $new_about      = mysqli_real_escape_string($conn,$new_about);
        
        $message = "Alterou seu about";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user,$user);
    }
    else
    {
        $new_about      = $linha['about'];
    }

    if(!empty($_POST['new_pasw']) and !empty($_POST['new_pasw2']))
    {
        if($_POST['new_pasw']== $_POST['new_pasw2']){
            $new_pass       = $_POST['new_pasw'];
            $new_pass       = stripslashes($new_pass);
            $new_pass       = mysqli_real_escape_string($conn,$new_pass);
            $password       = hash ("sha256", $new_pass);
        }
        else{
            echo '<script> alert("As duas senhas não erram iguais!");
            </script>';
        }
        
    }
    else if(!empty($_POST['new_pasw']) xor !empty($_POST['new_pasw2'])){
        echo '<script> alert("Um dos campos da senha estava vazio!");
            </script>';
    }
    else{
         $password      = $linha['password'];
    }


    $query_name = "UPDATE usuario SET dateBirthday='".$new_dateBirthday."', allignment='".$new_allignment."', mbti='".$new_mbti."',about='".$new_about."',password ='".$password."',picture='".$new_pic."' WHERE  user = '".$sessionID."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result){
        $_SESSION['byron_gamification']['dateBirthday']     = $new_dateBirthday ;
        $_SESSION['byron_gamification']['allignment']       = $new_allignment ;
        $_SESSION['byron_gamification']['mbti']             = $new_mbti ;
        $_SESSION['byron_gamification']['about']            = $new_about ;

        echo '<script> alert("Campos alterados com sucesso!");
            window.location.href="../_view/pageProfile.php?id='.$linha['user'].'";
        </script>';
        mysqli_close ($conn);
        exit;
    }
    else{
        echo '<script> alert("Campos não alterados!");
            window.location.href="../_view/pageProfile.php?id='.$linha['user'].'";
        </script>';
    }

?>