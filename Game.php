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
 */


class Game {
    protected $map;
    protected $playerP;

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
}
?>

       
