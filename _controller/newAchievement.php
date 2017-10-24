<?php
    require_once 'mysql_connect.php';
    include "log.php";
 
 
    if (!isset($_POST['nameConquista']) or !isset($_POST['description'])){
        die ();
    }
 
    $nameCon         = stripslashes($_POST['nomeConquista']);
    $description     = stripslashes($_POST['description']);
    $nameCon         = mysqli_real_escape_string($conn, $nameCon);
    $description     = mysqli_real_escape_string($conn, $description);
 
    $queryText  = "INSERT INTO `conquista`(`name`, `description`) VALUES
        ('".$nameCon."','".$description."')";
 
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