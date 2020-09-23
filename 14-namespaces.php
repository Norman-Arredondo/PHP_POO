<?php
namespace empleado_2;

include 'includes/header.php';
/*Un namespace tiene que ser lo primero que se mande llamar en ese scrip  */
require_once 'Empleado.php';

echo "<br>";

class Empleado {

    public function __construct() {
        echo "desde 14-namespaces.php ";
    }
}

//Instanciar
$empleado = new Empleado();

