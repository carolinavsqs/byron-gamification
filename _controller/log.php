<?php
require_once 'mysql_connect.php';

function saveLog($mensagem, $type, $user) {
    $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
    $hora = date('Y-m-d H:i:s'); // Salva a data e hora atual (formato MySQL)
// Usamos o mysql_escape_string() para poder inserir a mensagem no banco
//   sem ter problemas com aspas e outros caracteres
    $mensagem = mysql_escape_string($mensagem);
// Monta a query para inserir o log no sistema
    $queryText = "INSERT INTO `log` VALUES(null,'".$hora."','".$ip."','".$mensagem."','".$type."','".$user."')";
    
    $conn = mysqli_connect("localhost", "root", "", "gamification_db") or die ();
    $queryResult = mysqli_query($conn, $queryText);
    if (!$queryResult){
        echo "<script> alert('deu erro filhão!');
        window.location.href='../index.php';
    </script>";
    }    
}

?>