<?php
    require_once 'mysql_connect.php';
    

    if (!isset($_POST['usrname']) or !isset($_POST['nome']) or !isset($_POST['class']) or !isset($_POST['data'])){
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
    $username   = mysqli_real_escape_string($conn, $username);
    $nome       = mysqli_real_escape_string($conn, $nome);
    $class      = mysqli_real_escape_string($conn, $class);
    $password1  = mysqli_real_escape_string($conn, $trimmed);
    $data       = mysqli_real_escape_string($conn, $data);


    $password   = hash ("sha256", $password1);

    $queryText  = "INSERT INTO `usuario`(`user`, `name`, `class`,`dateBirthday`,`password`) VALUES
        ('".$username."','".$nome."','".$class."', '".$data."','".$password."')";

    $queryResult = mysqli_query ($conn, $queryText);

    if (!$queryResult)
    {
        echo "<script>alert('Erro ao criar usuario!')</script>";
    }
    else
    {
        echo "<script>window.location.href='../index.php'</script>";
    }
?>