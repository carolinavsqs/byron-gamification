<?php
    require_once 'mysql_connect.php';
    include "log.php";

    $sessionID = //Informação do front end

    $sql = "DELETE FROM conquistas WHERE id= '".$sessionID."'";

	if (mysqli_query($conn, $sql)) {
    echo "Deletado com sucesso";
    $message = "Conquista deletada";
	$type = "delete";
    $user = $_SESSION['byron_gamification']['user'];
    saveLog($message, $type, $user);

	} else {
	    echo "Não foi possivel deletar " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>