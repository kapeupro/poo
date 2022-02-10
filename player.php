<?php 

/**
 * Créer une classe Player avec $items (tableau vide)
 * 
 * 
 */
class Player {

    protected $items;
    protected $checkDest;
    protected $move;

    public function __construct() {
        $this->items = [];
    }

    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }
    
   public function checkDest() {
        $map = $this->getMap();
        $player = $this->getPlayer();
        $dest = $player[$player[0]][$player[1]];
        if ($dest == "K") {
            echo "You win !\n";
            exit;
        }
        if ($dest == "E") {
            echo "You loose !\n";
            exit;
        }
        if ($dest == "1") {
            echo "You can't go there !\n";
            exit;
        }
    }

    public function move() {
        $map = $this->getMap();
        $player = $this->getPlayer();
        $dest = $player[$player[0]][$player[1]];
        if ($dest == "K") {
            echo "You win !\n";
            exit;
        }
        if ($dest == "E") {
            echo "You loose !\n";
            exit;
        }
        if ($dest == "1") {
            echo "You can't go there !\n";
            exit;
        }
    }
   }
    


}



?>