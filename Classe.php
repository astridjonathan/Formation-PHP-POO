<?php


class Classe
{
    private $nom;
    private $profPrincipal;
    private $effectif, $eleves;

    /********| CONSTRUCTOR | ********/
    public function __construct($nom, $profPrincipal,$effectif)
    {
        $this->nom  = $nom;
        $this->profPrincipal  = $profPrincipal;
        $this->effectif  = $effectif;
        $this->eleves = []; // Initialisation de la propriété éleves comme tableau

    }

    /********| GETTERS | ********/
    public function getNom()
    {
        return $this->nom;
    }

    public function getProfPrincipal()
    {
        return $this->profPrincipal;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }
    public function getEleves()
    {
        return $this->eleves;
    }

    /********| SETTERS | ********/
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setProfPrincipal($profPrincipal)
    {
        $this->profPrincipal = $profPrincipal;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    /**
     *Permet d'ajouter un élève à une classe
     * TODO: Vérifier que l'élève n'existe pas déjç
     * @param Eleve $eleve
     */
    public function ajouterUnEleve(Eleve $eleve)
    {
        $this->eleves[] = $eleve;
    }

}