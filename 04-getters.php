<?php include 'includes/header.php';
//Getters: Existen en la POO para obtener el valor que existe en un objeto

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;
        public $tamaño = 'Tamño del producto';


        /*Para crear un método usamos el modificador de acceso
          Usualmente los getters van a retornar un valor, no imprimen información
          Usualmente se crean 1 getter para cada una de las propiedades que tiene tu objeto
        */
        public function getNombre(){
          return $this->nombre;
        }

        public function getPrecio(){
          return $this->precio;
        }

        public function getTamaño(){
          return $this->tamaño;
        }
    }

$bebida = new MenuRestaurant();
$bebida->nombre = "Jugo de Uva";
$bebida->precio = 30;

//Como solo retorna un valor tenemos que escribir echo
echo $bebida->getNombre();
echo $bebida->getPrecio();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = "Pastel de 3 leches";
//Aquí le asignamos un valor, pero si no lo asignamos se queda el que tiene por default
$postre->precio = 25;

//Como solo retorna un valor tenemos que escribir echo
echo $postre->getNombre();
echo $postre->getPrecio();

echo "<br>";

$dulce = new MenuRestaurant();
$dulce->nombre = "chocolate";
$dulce->precio = 10;
$dulce->tamaño = pequeño;

//Como solo retorna un valor tenemos que escribir echo
echo $dulce->getNombre();
echo $dulce->getPrecio();
echo $dulce->getTamaño();
