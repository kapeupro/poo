<?php 

/**
 * Créer une classe Player avec $items (tableau vide)
 * 
 * 
 */
class Player {

    protected $items;

    public function __construct() {
        $this->items = [];
    }

    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }


}



?>