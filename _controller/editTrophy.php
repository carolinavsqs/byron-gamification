<?php
    require_once 'mysql_connect.php';
    include "log.php";

	$sessionID = //Informação do front end

	$query_TEXT = "SELECT * FROM `trofeu` WHERE '".$sessionID."' = `id`";
	$query_result = mysqli_query($conn, $query_TEXT);
	$linha = mysqli_fetch_array($query_result);

	if (!empty($_POST['new_trophy_name']))
    {
        $new_name       = $_POST['new_trophy_name'];
        $new_name       = stripslashes ($new_name);
        $new_name       = mysql_real_escape_string ($new_name);
    
        $message = "Editou o nome do trofeu";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_name       =   $linha['name'];

    if (!empty($_POST['new_description']))
    {
        $new_description        = $_POST['new_description'];
        $new_description        = stripslashes ($new_description);
        $new_description        = mysql_real_escape_string ($new_description);
        
        $message = "Editou a descrição da conquista";
        $type = "edit";
        $user = $_SESSION['byron_gamification']['user'];
        saveLog($message, $type, $user);
    }
    else
        $new_description        = $linha['description'];

    if (!isset( $_FILES[ 'arquivo_pic' ][ 'name' ] ) && $_FILES[ 'arquivo_pic' ][ 'error' ] == 0 )
    {

        $arquivo_tmp = $_FILES[ 'arquivo_pic' ][ 'tmp_name' ];
        $nome = $_FILES[ 'arquivo_pic' ][ 'name' ];
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
        $extensao = strtolower ( $extensao );

        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            $novoNome = uniqid ( time () ) . "." . $extensao;
            $destino = '../_imagens/profile_pic/' . $novoNome;
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                $new_pic = '_imagens/profile_pic/' . $novoNome;
            }
        }
    }else
        $new_pic = $linha[`image`];


    $my_id          = $linha["id"];

    $query_name = "UPDATE `trofeu` SET `name`='".$new_name."',`description` = '".$new_description."',`imagem` = '".$new_pic."', WHERE id = '".$my_id."'";

    $query_result = mysqli_query($conn, $query_name);

    if ($query_result)
    {
	    header("location:../_view/home.php");
            echo "<script> 
                alert('Editado com sucesso!');
                window.location.href='../index.php';
            </script>";
	    mysqli_close ($conn);
	    
	    $message = "Trofeu editado";
		$type = "edit";
	    $user = $_SESSION['byron_gamification']['user'];
	    saveLog($message, $type, $user);
	    exit;
	}else{
        echo "<script> 
        alert('Erro ao editar!');
        window.location.href='../index.php';
        </script>";
    }
?>