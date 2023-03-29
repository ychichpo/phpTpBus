<?php

class Conducteur
{
    private string $nom;
    private string $prenom;
    private bool $affecte=false;




    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function isAffecte(): bool
    {
        return $this->affecte;
    }


    public function setAffecte(bool $affecte): void
    {
        $this->affecte = $affecte;
    }

}