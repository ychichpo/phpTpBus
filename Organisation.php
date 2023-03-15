<?php

class Organisation
{

    private string $nom;
    private string $ville;
    private array $garage=[];


    public function __construct(string $nom, string $ville, array $garage)
    {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->garage = $garage;
    }


    public function getNom(): string
    {
        return $this->nom;
    }


    public function getVille(): string
    {
        return $this->ville;
    }


    public function getGarage(): array
    {
        return $this->garage;
    }
    public function addVehiculeInGarage(Vehicule $unVehicule){
        $this -> garage[]=$unVehicule;
    }


}