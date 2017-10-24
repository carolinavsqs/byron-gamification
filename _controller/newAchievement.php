<?php
    require_once 'mysql_connect.php';
    include "log.php";
 
 
    if (!isset($_POST['nameConquista']) or !isset($_POST['description']) or (($_FILES[ 'arquivo_pic' ][ 'name' ]) && $_FILES[ 'arquivo_pic' ][ 'tmp_name' ] == 0)){
        die ();
    }

    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
    $extensao = strtolower ( $extensao );
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao )){
        $novoNome = uniqid(time()).".".$extensao;
        $destino = '../_img/insignia/' . $novoNome;
         if (@move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            
            $new_pic = '_img/insignia/'.$novoNome;
        }
    }
 
    $nameCon         = stripslashes($_POST['nomeConquista']);
    $description     = stripslashes($_POST['description']); 
    $nameCon         = mysqli_real_escape_string($conn, $nameCon);
    $description     = mysqli_real_escape_string($conn, $description);
 
 
    $queryText  = "INSERT INTO `conquista`(`name`, `description`,`image`) VALUES
        ('".$nameCon."','".$description."','".$$new_pic."')";
 
    $queryResult = mysqli_query ($conn, $queryText);
 
    if (!$queryResult)
    {
        echo "<script>alert('Erro ao criar conquista!')</script>";
    }
    else
    {
        echo "<script>window.location.href='../index.php'</script>";
        $message = "Conquista criada";
        $type = "add";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
?>