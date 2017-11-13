<?php
    require_once 'mysql_connect.php';
    include "log.php";

    $sessionID = //Informação do front end

    $sql = "DELETE FROM conquistas WHERE id= '".$sessionID."'";

	if (mysqli_query($conn, $sql)) {
        $mensagem = "deletou uma conquista de";
        $type = remove;
        $user = $_SESSION['byron_gamification']['user'];
        $userModify = $sessionID['user'];
        saveLog($mensagem, $type, $user, $userModify);

	} else {
	    echo "Não foi possivel deletar " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>