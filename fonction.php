<?php

function passwordLengthIsValid($passwordToValid){

    $length = strlen($passwordToValid);
    $reponses = [
        "valid" => true,
        "message" => ""
    ];

    if ($length < 6) {
        $reponses = [
            "valid" => false,
            "message" => "Votre mot de passe doit etre plus long s'il vous plait"
        ];
    }
    elseif ($length > 10) {
        $reponses = [
            "valid" => false,
            "message" => "Votre mot de passe doit etre plus court s'il vous plait"
        ];
    }

return $reponses;
}
function addSalt($passwordToSalt) {
    $salt = 'mdpsale123!';
    $saltedName = $salt.$passwordToSalt.$salt;

    //return $saltedName;
}


function passwordEncode($saltedName) {
    $passwordEncode = sha1($saltedName);
    return $passwordEncode;
}




?>