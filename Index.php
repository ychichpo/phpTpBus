<?php
require "Conducteur.php";
require "Vehicule.php";
require "Organisation.php";
require "Data.php";


// Travail à faire
// 1 - Faire les classes Conducteur, Vehicule et Organisation
// 2 - Affichage La liste des conducteurs par organisation et par véhicule
// 3 - Affichage La liste des conducteurs qui ne sont pas affectés à un véhicule


foreach ( $orga as $nomOrganisation=> $infoOrga) {
    echo "L'Organisation <b>" . $nomOrganisation ."</b> s'appele<b>" . $infoOrga->getNom() ."dans la ville : <b>". $infoOrga->getVille() .  "</b><br>";
    echo "Liste des voitures : <br>";
    foreach ($infoOrga->getGarage() as $voiture)
        echo $voiture->getImmatriculation().$voiture->getType();
        foreach ($conduct as $voiture )
            echo "Conducteur : <br>";
            echo $conduct->getNom().$conduct->getPrenom();

    echo "<br>";

}

/*
 *
 *
 *
 * echo "L'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b> est située à " . $questionnaire->getOrganisation()->getAdresse() . " et compte <b>" . $questionnaire->getOrganisation()->getNbUser() . "</b> utilisateur" . (($questionnaire->getOrganisation()->getNbUser() > 1 ) ? "s" : " ") . "<br>";
    echo "Liste des utilisateurs du questionnaire : <br>";
    foreach ($questionnaire->getOrganisation()->getUsers() as $user) {
        echo "- " . $user->getPrenom() . " " . $user->getNom() . " (" . $user->getEmail() . ")<br>";
    }
    echo "<br>";
 *
 */