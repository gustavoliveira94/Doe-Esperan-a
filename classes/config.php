<?php

global $pdo;

try {
    $pdo = new PDO("mysql:dbname=doeesperanca;host=localhost", "root", "");
} catch(PDOException $e) {
    echo 'Erro'. $e->getMessage();
}



?>