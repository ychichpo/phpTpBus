<?php
require "Conducteur.php";
require "Vehicule.php";
require "Organisation.php";
require "Data.php";


// Travail à faire
// 1 - Faire les classes Conducteur, Vehicule et Organisation
// 2 - Affichage La liste des conducteurs par organisation et par véhicule
// 3 - Affichage La liste des conducteurs qui ne sont pas affectés à un véhicule


foreach ($orga as $infoOrga)
{
    echo "L'organisation : " . $infoOrga->getNom() ."<br/>" ."Ville : ". $infoOrga->getVille() . "<br/>";
    echo "Liste des voitures :"."<br/>";
    foreach ($infoOrga->getGarage() as $voitures){
        echo "Immatriculation : " .$voitures->getImmatriculation() ."<br/>". "Type : ".$voitures->getType()."<br/>"."Statut : ".$voitures->getStatut()."<br/>";
        echo "Le conducteur : "."<br/>";
        echo "Prenom : ".$voitures->getConducteur()->getPrenom()."<br/>"."Nom : ".$voitures->getConducteur()->getNom();
        echo "<br/>";

    }
    echo "<br/>";
}



echo "<b>Liste des conducteurs non affectes a une voiture : </b>"."<br/>"."<br/>";

foreach ($equipe as $conducteur) {
    if ($conducteur->isAffecte()==false){
        echo $conducteur->getNom() ."<br/>";
    }
}




