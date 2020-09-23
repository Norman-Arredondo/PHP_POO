 <?php include 'includes/header.php';
/*Interfaces: Son plantillas para las clases
 *Tiene como fin que siva como estructura para tu clase
 * */

 interface RestauranteInterface {
     public function getNombre();

     public function getPrecio() : int;



 }
class MenuRestaurant implements RestauranteInterface {
    public $nombre; 
    protected $precio;

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