<?php include 'includes/header.php';

class MenuRestaurant {
     public $nombre = 'Nombre del Producto';
     public $precio = 0;
}

$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de Naranja';
$bebida->precio = 30;

echo $bebida->nombre;

var_dump($bebida);

$postre = new MenuRestaurant();
$postre->nombre = 'Postre';
$postre->precio = 100;

var_dump($postre);