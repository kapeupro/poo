<?php 
require_once 'Game.php';


/**
 * Créer une classe Game 
 * Un attribut "$map" + getter setter ( tableaux vide)
 * 
 * Créer une méthode "init ()" qui va update la map vide et la remplir avec des cases vides
 * 
 * Créer une copie de la map qui servira de calque pour le déplacemment du joueur
 * 
 * Créer une classe Player avec $items (tableau vide)
 * 
 * Créer dans Game les méthodes " launch() " qui fait une introduction et affiche la map
 *  " playerChoice() " qui prompt au joueur ce qu'il veut faire ( haut bas gauche droite)
 * 
 * Créer dans Player les méthodes "checkDest" qui va vérifier si la destination est un mur ou non 
 * "move()" qui va déplacer le joueur 
 * dans la direction choisie SI c'est possible
 */




    $game = new Game();
    $game->init();
    $game->showMap();
    $game->launch();



?>


