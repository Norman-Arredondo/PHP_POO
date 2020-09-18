<?php include 'includes/header.php';

//Variables en POO se conocen como propiedades
//Las propiedades tienen modificadores de acceso

class MenuRestaurant {
  public $nombre = 'Nombre del producto';
  public $precio = 0;
}

$bebida = new MenuRestaurant();
//Nombre y precio está en bebida y postre; para reescribirlos: utilizamos sintaxis de flecha -> (Exclusiva de los objetos de php)
//No se requiere el $
//Es para asignar un valor
$bebida->nombre = 'Jugo de Naranja';
$bebida->precio = 30;

$bebida->preci = 100; //No está en las propiedades preci, pero lo hace valido, se puede modificar con Getters y Setters

//Para mostrarlo
echo $bebida->nombre;

$postre = new MenuRestaurant();
$postre->nombre = "Flan de Chocolate";
$postre->precio = 50;


var_dump($bebida);
var_dump($postre);
