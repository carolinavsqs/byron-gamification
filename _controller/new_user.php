<?php
    require_once 'mysql_connect.php';
    

    if (!isset($_POST['usrname']) or !isset($_POST['nome']) or !isset($_POST['psw1']) or !isset($_POST['psw2']))
        die ();
    

    $username   = stripslashes($_POST['usrname']);
    $nome      = stripslashes($_POST['nome']);
    $password1  = stripslashes($_POST['psw1']);
    $password2  = stripslashes($_POST['psw2']);
    $username   = mysqli_real_escape_string($conn, $username);
    $nome      = mysqli_real_escape_string($conn, $nome);
    $password1  = mysqli_real_escape_string($conn, $password1);
    $password2  = mysqli_real_escape_string($conn, $password2);

    $password   = hash ("sha256", $password1);

    $queryText  = "INSERT INTO `usuario`(`user`, `name`, `password`) VALUES
        ('".$username."','".$nome."','".$password."')";

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