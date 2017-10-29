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

?>