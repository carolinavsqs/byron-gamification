<?php
	require_once '../_controller/mysql_connect.php';

	$sessionID = //Informação do front end

	$query_TEXT = "SELECT * FROM `trofeu` where'".$sessionID."' = `user`"
	$query_result = mysqli_query($conn, $query_TEXT);

	$linha = mysqli_fetch_array($query_result);
	
	INSERT INTO usuario_trofeu() values(.$linha["user"], .$linha["id_trofeu"]);
?>

