<?php

class Vehicule
{

    private string $immatriculation;
    private string $type;
    private string $statut;
    private Conducteur $Conducteur;

    public function __construct(string $immatriculation, string $type, string $statut)
    {
        $this->immatriculation = $immatriculation;
        $this->type = $type;
        $this->statut = $statut;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }


    public function getType(): string
    {
        return $this->type;
    }


    public function getStatut(): string
    {
        return $this->statut;
    }


    public function getConducteur(): Conducteur
    {
        return $this->Conducteur;
    }

    public function setConducteur(Conducteur $Conducteur): void
    {
        $this->Conducteur = $Conducteur;
        $this->Conducteur->setAffecte(true);
    }


}