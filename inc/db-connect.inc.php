<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_galary', 'php_galary', 'hm*f0(7H3DNfo_Hi', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}
