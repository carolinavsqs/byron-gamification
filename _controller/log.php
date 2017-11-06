<?php
require_once 'mysql_connect.php';

function saveLog($mensagem, $type, $user) {
    $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
    $hora = date('Y-m-d H:i:s'); // Salva a data e hora atual (formato MySQL)
    $queryText = "INSERT INTO `log`(`id`, `hora`, `ip`, `message`, `type`, `user`) VALUES(null,'".$hora."','".$ip."','".$mensagem."','".$type."','".$user."')";
    
    $conn = mysqli_connect("localhost", "root", "", "gamification_db") or die();
    $queryResult = mysqli_query($conn, $queryText);
    if (!$queryResult){
        echo "<script> alert('Deu erro no log!');
        window.location.href='../index.php';
    </script>";
    }    
}

?>
