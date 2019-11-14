<?php

/**
 * Une classe PHP est une entité regroupant des variables ("propriétés")
 * et des fonctions ("méthodes") par thème.
 */
class Ecole
{
    /**
     * Déclaration des propriétés de la classe
     * "private", nous permet d'interdire l'accès direct aux propriétés par les objets
     * En "private" les propriétes sont accessible UNIQUEMENT à l'intérieur de la classe.
     * C'est pour des raisons de sécurité.
     */
    private $nom;
    private $adresse;
    private $effectif;
    private $directeur;
    private $classes=[];

    /**
     * Mise en place d'un CONSTRUCTEUR pour permettre l'attributaion
     * des valeurs aux propriétés
     * -----------------------------------------------------------------------
     * Objectif du constructeur: remplir / d'initialiser les propriétés
     * de la classe avec des valeurs. Appelé "hydrater la classe".
     * Il doit être accessible PUBLIQUEMENT
     *  -----------------------------------------------------------------------
     * Cette fonction est exécutée AUTOMATIQUEMENT par PHP au moment de
     * l'instanciation de la classe (= new Classe)
     */
    public function __construct($nom, $adresse,$directeur,$effectif)
    {
        /**
         * *La propriété "nom" de la classe ($this->>nom) prend comme valeur
         * la valeur de la variable ($nom) passé en paramètre au moment de l'instanciation
         * --------------------------------------------------------------------------------
         * $this se réfère à votre objet
         */
        $this->nom          =$nom;
        $this->adresse      =$adresse;
        $this->directeur    =$directeur;
        $this->effectif     =$effectif;
        
        #Fin du constructeur
    }

    /*********| GETTERS |**********/
    public function getNom()
    {
        return $this->nom;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getDirecteur()
    {
        return $this->directeur;
    }
    public function getEffectif()
    {
        return $this->effectif;
    }

    /*********| SETTERS |**********/
    public function setNom($nom)
    {
         $this->nom =$nom;
    }
    public function setAdresse($adresse)
    {
         $this->adresse=$adresse;
    }
    public function setDirecteur($directeur)
    {
         $this->directeur=$directeur;
    }
    public function setEffectif($effectif)
    {
         $this->effectif=$effectif;
    }

    /**
     * Affecte une classe à une école
     * @param Classe $classe
     */
    public function ajouterUneClasse(Classe $classe)
    {
        return $this->classes[] = $classe;
    }
}