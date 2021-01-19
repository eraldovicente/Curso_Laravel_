<?php include 'includes/header.php';

interface RestauranteInterface
{
     public function getNombre();

     public function getPrecio() : int;

     public function setPrecio($precio);
}

class MenuRestaurant {
     public $nombre;
     public $precio;

     public function __construct( $nombre, $precio )
     {
          $this->nombre = $nombre;
          $this->precio = $precio;
     }

     public function getNombre() 
     {
          return $this->nombre;
     }

     public function getPrecio() : int
     {
          return $this->precio;
     }

     public function setPrecio()
     {
          $this->precio = $precio;
     }
}

$menu = new MenuRestaurant('Platillo', 'Hola');
var_dump($menu);