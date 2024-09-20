<?php
class Livre
{
    public $titre;
    public $isbn;
    public $auteurs;
}

class Auteur
{
    public $nom;
    public $prenom;
}

$livre1 = new Livre();
$livre1->titre = "Il etait une fois un vieux couple heureux ." ;
$livre1->isbn = "9782266000016";
$livre1->auteurs = [
    new Auteur("Mohammed" ,"Khaïr-Eddin")
];

$json = json_encode($livre1);

file_put_contents('tuto_7.json', $json);

$json = file_get_contents('tuto_7.json');

$livreLu = json_decode($json);
echo $livreLu->titre; // Affichera "Le Petit Prince"