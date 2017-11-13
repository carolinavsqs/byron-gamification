<?php
    $queryText = "SELECT * FROM usuario WHERE user = '".$_SESSION['byron_gamification']['user']."'";
    $queryResult = mysqli_query ($conn, $queryText);
    if (!$queryResult)
    {
        echo "<script>alert('Erro ao carregar informações')</script>";
        die();
    }
    else{
        $userData = mysqli_fetch_array($queryResult);
    }
?>