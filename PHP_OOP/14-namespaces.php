<?php

include 'includes/header.php';

require_once 'Empleado.php';

echo "<br>";


class Empleado {
     public function __construct()
     {
          echo "Desde 14-namespaces.php";
     }
}

$empleado = new Empleado();