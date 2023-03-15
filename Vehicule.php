<?php

class Vehicule
{

    private string $immatriculation;
    private string $type;
    private string $statut;
    private Conducteur $Conducteur;

    /**
     * @param string $immatriculation
     * @param string $type
     * @param string $statut
     * @param Conducteur $Conducteur
     */
    public function __construct(string $immatriculation, string $type, string $statut)
    {
        $this->immatriculation = $immatriculation;
        $this->type = $type;
        $this->statut = $statut;
    }

    /**
     * @return string
     */
    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getStatut(): string
    {
        return $this->statut;
    }

    /**
     * @return Conducteur
     */
    public function getConducteur(): Conducteur
    {
        return $this->Conducteur;
    }

    /**
     * @param Conducteur $Conducteur
     */
    public function setConducteur(Conducteur $Conducteur): void
    {
        $this->Conducteur = $Conducteur;
    }


}