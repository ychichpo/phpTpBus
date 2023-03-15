<?php

$jack = new Conducteur("Jack", "Sparrow");
$paul = new Conducteur("Paul", "McCartney");
$annie = new Conducteur("Annie", "Lennox");
$john = new Conducteur("John", "Lennon");
$mikey = new Conducteur("Mikey", "Way");
$bob = new Conducteur("Bob", "Marley");

$equipe = array($jack, $paul, $annie, $john, $mikey, $bob);

$bus["AB1234ER"] = new Vehicule("AB1234ER", "Bus", "En service");
$bus["AB1234ER"]->setConducteur($jack);

$bus["FR4753ER"] = new Vehicule("FR4753ER", "Bus", "En service");
$bus["FR4753ER"]->setConducteur($john);

$bus["TR3454ER"] = new Vehicule("TR3454ER", "Bus", "En service");
$bus["TR3454ER"]->setConducteur($annie);

$orga["eurobus"] = new Organisation("Eurobus", "Paris");
$orga["eurobus"]->addVehiculeInGarage($bus["AB1234ER"]);

$orga["blablacar"] = new Organisation("Blablacar", "Paris");
$orga["blablacar"]->addVehiculeInGarage($bus["FR4753ER"]);
$orga["blablacar"]->addVehiculeInGarage($bus["TR3454ER"]);



