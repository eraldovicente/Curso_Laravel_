<?php include 'includes/header.php';

class DB {
     public static function conectarDB()
     {
          echo "Conectando a la base de dados";
     }
}

class Email {
     public static function enviarEmail()
     {
          echo "Enviando Email...";
     }
}

DB::conectarDB();

echo "<br>";

Email::enviarEmail();