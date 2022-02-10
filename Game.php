<?php 



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
 * Créer dans Game les méthodes "launch()" qui prompt au joueur ce qu'il veut faire ( haut bas gauche droite)
 * 
 * Créer dans Player les méthodes "checkDest" qui va vérifier si la destination est un mur ou non 
 * "move()" qui va déplacer le joueur 
 * dans la direction choisie SI c'est possible
 */


class Game {
    protected $map;
    protected $playerP;
    protected $launch;
    protected $playerChoice;


    public function __construct() {
        $this->map = [];
        $this->playerP = [];
    }


    public function getMap() {
        return $this->map;
    }
    public function setMap($map) {
        $this->map = $map;
    }


    public function getPlayer() {
        return $this->playerP;
    }
    public function setPlayer($playerP) {
        $this->playerP = $playerP;
    }


    function init() {
        $map = [ 
            [0 , 1 , 0 , 1 , 1],
            [0 , 1 , 0 , 1 ,"K"],
            [0 , 1 , 1 , 0 , 1],
            [0 , 1 , 0 , 1 , 0],
            [0 , 1 , 0 , 1 , 0],
            [0 , 0 , 0 , 1 , "E"],
          ];
        $this->setMap($map);
        $this->setPlayer($this->getMap());
    }

    function  showMap () {
        for($line = 0; $line < count($this->getMap()); $line++){
            for($cell = 0; $cell < count($this->getMap()[$line]); $cell++){
                echo $this->getMap()[$line][$cell];
            }
            echo "\n";
        }
    }

    public function launch() {
        echo "Veuillez choisir une direction : \n";    
    }
    public function playerChoice(){
        $move = false;
        while($move === false) {
        echo "Votre choix : ";
        $direction = rtrim(fgets(STDIN));
        echo "\n";
        echo "Vous avez choisi : " . $direction;
        echo "\n"; 
        if ($direction === "z") {
            echo "Vous avez choisi de monter";
            $move = true;
        }
        elseif ($direction === "q") {
            echo "Vous avez choisi de gauche";
            $move = true;
        }
        elseif ($direction === "s") {
            echo "Vous avez choisi de descendre";
            $move = true;
        }
        elseif ($direction === "d") {
            echo "Vous avez choisi de droite";
            $move = true;
        }
        else {
            echo "Veuillez choisir une direction valide : \n";
            echo "haut : haut \n";
            echo "bas : bas \n";
            echo "gauche : gauche \n";
            echo "droite : droite \n";
        }
    }
        
}   

}


    
?>

       
