<?php
require_once("fonction.php");
var_dump($_POST);

if($_POST) {
    $nom = $_POST['fnom'];
    $prenom = $_POST['fprenom'];
    $passe = $_POST['fpasse'];
    $confirmationPasse = $_POST['fconfirmationpasse'];

    if (empty($nom)) {
        echo "</br> Votre nom est vide. Veuillez le remplir s'il vous plait.";

    }
    elseif(empty($prenom)) {
        echo "</br> Votre prenom est vide. Veuillez le remplir s'il vous plait.";

    }

    elseif(empty($passe)) {
        echo "</br> Votre mot de passe est vide. Veuillez le remplir s'il vous plait.";

    }

    elseif(empty($confirmationPasse)) {
        echo "</br> Vous n'avez pas confirmé votre mot de passe. Veuillez le faire s'il vous plait.";

    }
    

    else {
        echo "</br> Votre nom est : " . $nom;
        echo "</br> Votre prenom est : " . $prenom;
    }



    $passwordLengthIsValid = passwordLengthIsValid($_POST['fpasse']);
    $passwordLengthIsValid = passwordLengthIsValid($_POST['fconfirmationpasse']);
    echo"</br>";
    var_dump($passwordLengthIsValid);

    

//Pour confirmer le mot de passe
    if ($confirmationPasse != $passe) {
        echo "<h1> La confirmation de votre mot de passe n'a pas eu lieu. Veuillez la refaire s'il vous plait.</h1>";
        //return $passe;
    }
    else {
        echo "<h1> Votre mot de passe a ete confirme avec succes</h1>";

    }


    echo '</br>';
    $saltedName = addSalt($_POST['fpasse']);
    var_dump($saltedName);

    $passwordEncode = passwordEncode($saltedName);
    echo'</br>';
    echo $passwordEncode;



}





?>

<a href="./index.php"> Retour </a>