<?php
    require_once 'mysql_connect.php';
    include "log.php";
    

    if (!isset($_POST['usrname']) or !isset($_POST['nome']) or !isset($_POST['class']) or !isset($_POST['data']) or !isset($_POST['Nick']) or !isset($_POST['guild'])){
        $input_data = $_POST['data'];
        die ();
    }   
    
    $remove     = $_POST['data'];
    $trimmed    = str_replace('-', '', $remove);

    $username   = stripslashes($_POST['usrname']);
    $nome       = stripslashes($_POST['nome']);
    $class      = stripslashes($_POST['class']);
    $password1  = stripslashes($trimmed);
    $data       = stripslashes($_POST['data']);
    $genero     = stripslashes($_POST['Nick']);
    $guild      = stripslashes($_POST['guild']);
    $username   = mysqli_real_escape_string($conn, $username);
    $nome       = mysqli_real_escape_string($conn, $nome);
    $class      = mysqli_real_escape_string($conn, $class);
    $password1  = mysqli_real_escape_string($conn, $trimmed);
    $data       = mysqli_real_escape_string($conn, $data);
    $genero       = mysqli_real_escape_string($conn, $genero);
    $guild       = mysqli_real_escape_string($conn, $guild);


    $password   = hash ("sha256", $password1);

    $queryText  = "INSERT INTO `usuario`(`user`, `name`, `class`,`dateBirthday`,`password`,`genero`,`id_guild`) VALUES
        ('".$username."','".$nome."','".$class."', '".$data."','".$password."','".$genero."','".$guild."')";

    $queryResult = mysqli_query ($conn, $queryText);

    if (!$queryResult)
    {
        echo "<script>alert('Erro ao criar usuario!')</script>";
    }
    else
    {
        echo "<script>window.location.href='../index.php'</script>";
        $message = "Novo usuario cadastrado";
        $type = "add";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
?>