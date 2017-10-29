<?php
    $queryText = "SELECT * FROM usuario WHERE user = '".$_GET['id']."'";
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