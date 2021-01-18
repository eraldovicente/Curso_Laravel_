<?php include 'includes/header.php';

class MenuRestaurant {
     private $nombre = 'Nombre el Producto';
     private $precio = 0;

    /**
     * Get the value of precio
     *
     * @return  mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @param   mixed  $precio  
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
}

$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de naranja';
$bebida->precio = 30;
echo $bebida->getNombre();
echo $bebida->getPrecio();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de Chocolate';
$postre->precio = 100;
echo $postre->getNombre();
echo $postre->getPrecio();