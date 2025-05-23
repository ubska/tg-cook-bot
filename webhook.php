<?php
// Importa il contenuto di config.php una sola volta
require_once 'config.php';

// Salva in una variabile  (i dati JSON)
$data = json_decode(file_get_contents('php://input'), true);

// Salva i dati in un file per controllare (opzionale)
file_put_contents('apidata.txt', print_r($data, true), FILE_APPEND);
