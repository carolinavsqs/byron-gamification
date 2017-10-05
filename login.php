<?php

require_once 'mysql_connect.php';

if (!empty($_POST['usrname']) or !empty($_POST['psw'])){
         $input_usuario    = $_POST['usrname'];
		 $input_password   = $_POST['psw'];
}
else
{
    echo"Os campos devem ser preenchidos";
    exit;
}   

$input_usuario     		= stripslashes($input_usuario);
$input_password         = stripslashes($input_password);
$input_usuario   		= mysqli_real_escape_string($conn,$input_usuario);
$input_password       	= mysqli_real_escape_string($conn,$input_password);


 $queryText = "SELECT * FROM `usuario` WHERE `user` LIKE '".$input_usuario."' AND `password` LIKE '".$input_password."'";
    $queryResult = mysqli_query ($conn, $queryText);

    if ((!$queryResult) or ((mysqli_num_rows ($queryResult)) < 1))
    {
        echo "<script>alert ('Usuario ou senha errada!');
            </script>";
        echo "Voce não é digno aventureiro";
    }
    else
    {
        session_start ();
		echo "<script>alert ('Bem Vindo');
           </script>";
		echo "Olá aventureiro";
    }

?>
	
