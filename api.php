<?php
header('Content-Type: application/json');

// Legge il file json
$jsonData = file_get_contents('dischi.json');
$data = json_decode($jsonData, true);

// Controlla se è stato fornito un id o un titolo
if (isset($_GET['titolo'])) {
    $titolo = $_GET['titolo'];
    $disco = array_filter($data, function ($var) use ($titolo) {
        return ($var['titolo'] == $titolo);
    });

    // Se il disco è stato trovato, lo restituisce come JSON
    if (!empty($disco)) {
        echo json_encode(array_shift($disco));
    } else {
        echo json_encode(["error" => "Disco non trovato"]);
    }
} else {
    // Manda tutti i dischi se non trova il titolo
    echo json_encode($data);
}
