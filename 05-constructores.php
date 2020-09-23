<?php include 'includes/header.php';

//Contructor: Es una función que se ejecuta automaticamente en el momento en el que creas un objeto en una clase
//En php versiones anteriores o en Java, (se utiliza como constructor el nombre de la clase) pero PHP tiene un nombre reservado __construct()
class MenuRestaurant {
    public $nombre;
    public $precio;
    public $categoria;

    public function __construct($nombre, $precio, $categoria){
      $this->nombre = $nombre;
      $this->precio = $precio;
      $this->$categoria = $categoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

//Instanciar
$bebida = new MenuRestaurant("Jugo de Uva",30,'Bebidas');
echo $bebida->getNombre();
