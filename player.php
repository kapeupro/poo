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

    public function playerPostion() {
        
    }
    
   public function checkDest() {
        

   }

    public function move() {
    
    }
    


}



?>