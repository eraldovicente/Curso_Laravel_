<?php include 'includes/header.php';

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

     public function getPrecio()
     {
          return $this->precio;
     }
}

class Bebida extends MenuRestaurant {
     public $medida;

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
     public $medida;

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

$bebida = new Bebida('Jugo de naranja', 30, '300ml');
echo "El precio es " . $bebida->getPrecio();

echo "<br>";

$postre = new Postre('Pastel de Chocolate', 100, '150g');
echo "El precio es " . $postre->getPrecio();
