<?php include 'includes/header.php';

class MenuRestaurant {
     public $nombre = 'Nombre del producto';
     public $precio = 0;
 
     public function obtenerProductoyNombre()
     {
          echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio;
     }
}

// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de naranja';
$bebida->precio = 100;
$bebida->obtenerProductoyNombre();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de chocolate';
$postre->precio = 150;
$postre->obtenerProductoyNombre();

echo "<br>";

$corte = new MenuRestaurant();
$corte->nombre = 'Rib Eye';
$corte->precio = 550;
$corte->obtenerProductoyNombre();