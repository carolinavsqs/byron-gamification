<?php
require_once 'mysql_connect.php';

function saveLog($mensagem, $type, $user, $userModify) {
    $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
    $hora = date('Y-m-d H:i:s'); // Salva a data e hora atual (formato MySQL)
    $queryText = "INSERT INTO `log`(`id`, `hora`, `ip`, `message`, `type`, `user`,`user_modify`) VALUES(null,'".$hora."','".$ip."','".$mensagem."','".$type."','".$user."', '".$userModify."')";
    
    $conn = mysqli_connect("localhost", "root", "", "gamification_db") or die();
    $queryResult = mysqli_query($conn, $queryText);
    if (!$queryResult){
        echo "<script> alert('Deu errado no log!');
        window.location.href='../_view/home.php';
    </script>";
    }
}

?>
