<?php

session_start();
require_once 'mysql_connect.php';

$query_name = "UPDATE usuario SET exp = 0";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
	{
	    echo "<script> alert('Resetado com sucesso!');
            window.location.href='../_view/home.php';
        </script>";
	    mysqli_close ($conn);
	    exit;
	}
    else{
        echo "<script> alert('Não foi possivel resetar!');
            window.location.href='../_view/home.php';
        </script>";
    }
?>