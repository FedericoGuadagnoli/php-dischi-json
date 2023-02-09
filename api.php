<?php

// Recupero il file da leggere
$source_url = __DIR__ . '/./data.json';

// Leggo il contenuto del file
$json_data = file_get_contents($source_url);

// Decodifico in caso debba creare filtri
$discs = json_decode($json_data, true);

// Comunico al server che scrivo in Json
header('Content-Type: application/json');

// Converto in Json e restituisco i discs
echo json_encode($discs);
