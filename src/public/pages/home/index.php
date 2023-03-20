<?php 

try {
    $db = new PDO("sqlsrv:Server=192.168.123.141;Database=Commerciale", "sa", "commerciale");
    echo 'PHP est connecté sur le serveur de base de données ! ';
} catch (\Throwable $th) {
    throw $th;
}

