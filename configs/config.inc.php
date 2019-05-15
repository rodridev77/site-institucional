<?php

require_once "environment.php";

$config = array();

if (ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/SiteInstitucional/");
    $config['dbname'] = "crudoo";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "123";
} else {
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = "estrutura_mvc";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "123";
}

global $conn;

try {
    $conn = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}