<?php

	

function convert_date_db_to_gui($date){
    $new = explode("-",$date);
    $new_date = $new[2]."/".$new[1]."/".$new[0];

    return $new_date;
}

function convert_genre_db_to_gui($genre){

    if($genre == "M"){
        return "Masculino";
    }
    
    if($genre == "F"){
        return "Feminino";
    }
}
function exp_total_guild($id){
	require_once ("check_login.php");
	require_once ("mysql_connect.php");

	$exp_total = 0;
    $sessionID      = $id;
    $query_text = "SELECT `exp` FROM `usuario` WHERE `id_guild` = '".$sessionID."'";
	$query_result   = mysqli_query($conn, $query_text);
    while($row = mysqli_fetch_array($query_result)){
		$exp_total+=$row['exp'];
	}

	$query_TEXT     = "SELECT `exp` FROM `guilda` WHERE `id`='".$sessionID."'";
	$query_result   = mysqli_query($conn, $query_TEXT);
	$linha          = mysqli_fetch_array($query_result);

	$exp_total     	+= $linha['exp'];

	return $exp_total;

}

?>