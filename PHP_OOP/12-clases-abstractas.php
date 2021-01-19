<?php include 'includes/header.php';

abstract class MenuRestaurant {
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

     public function getPrecio()
     {
          return $this->precio;
     }
}

class Bebida extends MenuRestaurant {
     public $medida;

     // Definir constante
     const CON_ALCOHOL = 1;
     const SIN_ALCOHOL = 0;

     public function __construct( $nombre, $precio, $medida )
     {
          parent::__construct($nombre, $precio);
          $this->medida = $medida;
     }

     public function getMedida()
     {
          return $this->medida;
     }
}

class Postre extends MenuRestaurant {
     public $peso;

     public function __construct( $nombre, $precio, $peso )
     {
          parent::__construct($nombre, $precio);
          $this->peso = $peso;
     }

     public function getPrecio()
     {
          return "El precio es " . $this->precio;
     }

     public function getPeso()
     {
          return $this->peso;
     }
}

// $menu = new MenuRestaurant('Nuevo elemento en el menú', 100);
// var_dump($menu);

$postre = new Postre('Pastel de Zanahoria', 100, '300g');
var_dump($postre);