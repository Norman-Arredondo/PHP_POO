<?php include 'includes/header.php';
/*Modificadores de acceso: Todos los atributos, propiedades, métodos, deben de tener un modificador de acceso
 *                          Le va a permitir a el código acceder a ciertos valores o restringir su acceso
 *
 *Public: Se puede acceder en cualquier lugar, ya sea en la clase o en el objeto
 *
 * Protected: Significa que sólo se puede acceder a él por medio de la clase
 *            Para poder acceder a los valores que están definidos como protected tienes que hacerlo por medio de un getter o una funcion
 *            Pero tiene que estar definido en la clase
 *
 * Private: No puede ser accedido por las clases hijas
 **/

class MenuRestaurant {
    private $nombre;/*Public: puede acceder en cualquier lugar, ya sea en la clase o en el objeto
                    * Protected: Significa que sólo se puede acceder a él por medio de la clase*/
    public $precio;

    public function __construct( $nombre, $precio ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    private function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Bebida extends MenuRestaurant {
    public $medida;

    public function __construct( $nombre, $precio, $medida ) { 
        parent::__construct( $nombre, $precio  );
        $this->medida = $medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        parent::__construct( $nombre, $precio );
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}

$postre = new Postre('Pastel de chocolate',100,'150g');
echo $postre->nombre; //No se puede porque es protected; con private tampoco
echo $postre->getNombre();//Se puede porque el getter es public pero si se cambia a private no lo muestra

