<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del Producto';
    public $precio = 0;

    public function obtenerProductoyNombre(){
      //$this hace refecencia al objeto y ayuda a que los valores no se mezclen
      echo "El producto ". $this->nombre ." tiene un precio de " .$this->precio;
    }
}


// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = "Jugo de Naranja";
$bebida->precio=100;
//Para mandar llamar el método; la flecha te permite acceder a la instancia o lo que exista a la clase
$bebida->obtenerProductoyNombre();

echo "<br>";

// Instanciar una clase
$postre = new MenuRestaurant();
$postre->nombre = "Pastel de chocolate";
$postre->precio=150;
//Para mandar llamar el método; la flecha te permite acceder a la instancia o lo que exista a la clase
$postre->obtenerProductoyNombre();

echo "<br>";

// Instanciar una clase
$corte = new MenuRestaurant();
$corte->nombre = "Rib Eye";
$corte->precio=550;
//Para mandar llamar el método; la flecha te permite acceder a la instancia o lo que exista a la clase
$corte->obtenerProductoyNombre();
