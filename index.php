<?php

#Importation de notre classe Ecole
require_once 'Ecole.php';
#Importation des classes Eleve et Classe
require_once 'Classe.php';
require_once 'Eleve.php';
/**
 * Création d'une instance pour accéder aux informations de la Classe
 * La variable $ecole est un obket de classe Ecole. Elle a accès
 * à l'ensemble des proriétés et méthodes qui la compose.
*/
#$ecole = new Ecole();
$ecole = new Ecole('WF3 Guadeloupe','ASFO - ZI Bergevin 97110 PAP','Nathalie BAUSSET',14);

//#Affectation de valeurs à l'objet
//$ecole->nom = 'WF3 Guadeloupe';
//$ecole->adresse = 'ASFO - ZI Bergevin 97110 PAP';
//$ecole->directeur = 'Nathalie BAUSSET';
//$ecole->effectif = 14;

echo '<pre>';
print_r($ecole);
echo '</pre>';

//# Afficher le nom de l'école dans un h1
//echo '<h1>' . $ecole->nom .'</h1>';
echo '<h1>' . $ecole->getNom() .' | '. $ecole->getAdresse()  .'</h1>';

$ecole->setNom('Webforce 3 Guadeloupe');

echo '<pre>';
print_r($ecole);
echo '</pre>';

/* --
    CONSIGNE : En vous appuyant sur notre travail
    avec la classe Ecole ; créez maintenant les
    classes "Classe" et "Eleve" dans des fichiers
    séparés.
    ---------------------------
    Classe.php et Eleve.php : Propriétés,
        Constructeur, Getters & Setters.
-- */

$eleve1 = new Eleve('JONATHAN', 'Astrid',8);
$eleve2 = new Eleve('JONATHAN', 'Elodie' ,7);
$eleve3 = new Eleve('LAGEEK', 'Brigitte' ,6);
$eleve4 = new Eleve('LEFOU', 'Joem' ,9);

$classe1 = new Classe('CE2A','Laureen Labuthie',22);
$classe2 = new Classe('CPA','Astrid JONATHAN',18);
$classe3 = new Classe('CM2A','Léna BOISSERON',24);

#Affecter chaque élève à une classe
$classe1->ajouterUnEleve($eleve1);
$classe2->ajouterUnEleve($eleve2);
$classe2->ajouterUnEleve($eleve3);
$classe3->ajouterUnEleve($eleve4);


echo '<pre>';
print_r($classe2);
print_r($classe1);
print_r($classe3);
echo '</pre>';

#affecter une classe à une école
$ecole->ajouterUneClasse($classe1);
$ecole->ajouterUneClasse($classe2);
$ecole->ajouterUneClasse($classe3);

echo '<pre>';
print_r($ecole);
echo '</pre>';

/* --
    CONSIGNE : En partant de l'object $ecole;
    affichez la liste ol, ul, li des classes pour
    chaque classes les étudiants.
    ----------------------------------------------
-- */

