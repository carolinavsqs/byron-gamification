<?php
    require_once 'mysql_connect.php';
    include "log.php";

	$sessionID = //Informação do front end

	$query_TEXT = "SELECT * FROM `conquista` WHERE '".$sessionID."' = `id`";
	$query_result = mysqli_query($conn, $query_TEXT);
	$linha = mysqli_fetch_array($query_result);

	if (!empty($_POST['new_achiv_name']))
    {
        $new_name       = $_POST['new_achiv_name'];
        $new_name       = stripslashes ($new_name);
        $new_name       = mysql_real_escape_string ($new_name);
    
        $mensagem = "editou o nome da conquista .$linha['name'] para .$new_achiv_name";
        $type = edit;
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($mensagem, $type, $user);
    }
    else
        $new_name       =   $linha['name'];

    if (!empty($_POST['new_description']))
    {
        $new_description        = $_POST['new_description'];
        $new_description        = stripslashes ($new_description);
        $new_description        = mysql_real_escape_string ($new_description);
        
        $mensagem = "editou a descricao da conquista .$linha['name']";
        $type = edit;
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($mensagem, $type, $user);
    }
    else
        $new_description        = $linha['description'];


    $my_id          = $linha["id"];

    $query_name = "UPDATE `conquista` SET `name`='".$new_name."',`description` = '".$new_description."', WHERE id = '".$my_id."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
	    header("location:../_view/home.php");
            echo "<script> 
                alert('Editado com sucesso!');
                window.location.href='../index.php';
            </script>";
	    mysqli_close ($conn);
	    
	    $mensagem = "editou a conquista .$linha['name']";
        $type = edit;
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($mensagem, $type, $user);
	    exit;
	}else{
        echo "<script> 
        alert('Erro ao editar!');
        window.location.href='../index.php';
        </script>";
    }
?>