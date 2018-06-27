<?php

function usernamereloaded($firstname, $lastname){
    $mainword = str_split($lastname);
    foreach ($mainword as $w){
        $delimiter = $w[0];
        return ucwords($firstname).' .'.ucwords($delimiter);
    }

}


