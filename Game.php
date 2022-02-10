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
    protected $shopMap;
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

    public function setCell($x, $y, $cell) {
        $this->map[$x][$y] = $cell;
    }


    public function init() {
        $map = [ 
            [0 , 1 , 0 , 1 , 1],
            [0 , 1 , 0 , 1 ,"K"],
            ["s" , 1 , 1 , 0 , 1],
            [0 , 1 , 0 , 1 , 0],
            [0 , 1 , 0 , 1 , 0],
            [0 , 0 , 0 , 1 , "E"],
          ];
        $this->setMap($map);
        $this->setPlayer($this->getMap());
        for($line = 0; $line < count($this->getMap()); $line++) {
            for($column = 0; $column < count($this->getMap()[$line]); $column++) {
                if($this->getMap()[$line][$column] == "K") {
                    $this->getPlayer()[$line][$column] = "K"; // On place le joueur sur la case "K"
                }
                elseif($this->getMap()[$line][$column] == "E") {
                    $this->getPlayer()[$line][$column] = "E";
                }
                elseif($this->getMap()[$line][$column] == "s") {
                    $this->setCell($line , $column , "p");  // player position
                }           
                else {
                    $this->getPlayer()[$line][$column] = " ";
                    //$this->setCell($line , $column , " "); // On place les cases vides
                }
                

                }
            }
        }
    

     function showMap(){
        for ($column = 0; $column <= count($this->getMap()[0]); $column++){
            echo " - ";
        }
        echo "\n";
        for($line = 0; $line < count($this->getMap()); $line++){
            echo "| ";
            for($cell = 0; $cell < count($this->getMap()[$line]); $cell++){
                echo " ";
                echo $this->getMap()[$line][$cell];
                echo " ";
            }
            echo " | \n";
        }
        for ($column = 0; $column <= count($this->getMap()[0]); $column++){
            echo " - ";
        }
        echo "\n";
    }

    public function launch() {
        echo "Bienvenue dans le jeu de la mort qui tue !\n";
        echo "Vous êtes sur la case K, vous devez vous déplacer vers la case E.\n";
        echo "Vous pouvez utiliser les commandes suivantes :\n";
        echo "haut, bas, gauche, droite\n";
        echo "Appuyez sur entrée pour continuer.\n";
        $this->showMap();
        $this->playerChoice();
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
            echo "\n";
            $move = true;
        }
        elseif ($direction === "q") {
            echo "Vous avez choisi de gauche";
            echo "\n";
            $move = true;
        }
        elseif ($direction === "s") {
            echo "Vous avez choisi de descendre";
            echo "\n";
            $move = true;
        }
        elseif ($direction === "d") {
            echo "Vous avez choisi de droite";
            echo "\n";
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

       
