<?php
	require_once '../_controller/mysql_connect.php';

	$sessionID = //Informação do front end

	$query_TEXT = "SELECT * FROM `trofeu` where'".$sessionID."' = `user`";
	$query_result = mysqli_query($conn, $query_TEXT);

	$linha = mysqli_fetch_array($query_result);
	
    $queryText = "INSERT INTO usuario_trofeu() values(.$linha["user"], .$linha["id_trofeu"])";
    $queryResult = mysqli_query($conn, $queryText);
    if ($query_result)
    {
        $mensagem = "adicionou um trofeu para";
        $type = add;
        $user = $_SESSION['byron_gamification']['user'];
        $userModify = $linha['user'];
        saveLog($mensagem, $type, $user, $userModify);
        
        header("location:../_view/home.php");
            echo "<script> 
                alert('Trofeu Atribuido com sucesso!');
                window.location.href='../index.php';
            </script>";
        mysqli_close ($conn);
        
        exit;
    }else{
        echo "<script> 
        alert('Erro ao atribuir trofeu!');
        window.location.href='../index.php';
        </script>";
    }
?>
