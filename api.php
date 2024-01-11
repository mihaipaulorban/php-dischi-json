<?php
// Faccio in modo che ovunque venga letto sia riconosciuto come file json
header('Content-Type: application/json');

// Legge il file json
$jsonData = file_get_contents('dischi.json');

// Converto in array il json
$data = json_decode($jsonData, true);

echo json_encode($data);
