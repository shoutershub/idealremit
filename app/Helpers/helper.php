<?php

function usernamereloaded($firstname, $lastname){
    $mainword = str_split($lastname);
    foreach ($mainword as $w) {
        $delimiter = $w[0];
        return ucwords($firstname) . ' .' . ucwords($delimiter);
    }

}

function bank_info_decyptor($value){
    $mainword = str_split($value);
        for ($i  = 0; $i  < 5; $i++ ) {
            return $i[$mainword ] ;

        }

}



