<?php include 'includes/header.php';

/*Métodos estáticos
 *No se requiere que se instancie la clase
 * Pero requiere el nombre de la clase seguido de :: y después el método
 * */

class DB {
    public static function conectarDB(){
        echo "Conectando a la base de datos";
    }
}

class Email {
    public static function enviarEmail() {
        echo "Enviando email...";
    }
}

DB::conectarDB();

echo "<br>";

Email::enviarEmail();