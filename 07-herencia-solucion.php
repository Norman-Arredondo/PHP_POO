<?php include 'includes/header.php';

/*Para heredar de una clase a otra se utiliza extends y el nombre de la clase*/
class MenuRestaurant {
    public $nombre;
    public $precio;

    public function __construct( $nombre, $precio ) {
        $this->nombre = $nombre;
        $this->precio = $precio;
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

class Bebida extends MenuRestaurant{
    public $medida;

    public function __construct( $nombre, $precio, $medida ) {
        parent::__construct($nombre,$precio);
        $this->medida = $medida;
    }

    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct( $nombre, $precio, $peso ) {
        parent::__construct($nombre,$precio);
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}


//Instancias
$bebida = new Bebida('Jugo de Naranja', 30, '300ml');
var_dump($bebida);

$postre = new Postre('Pastel de chocolate', 100, '150g');
var_dump($postre);
