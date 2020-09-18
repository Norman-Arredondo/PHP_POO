<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre;
    public $precio;

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}
