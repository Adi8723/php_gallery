<?php

function render($path, array $data = []) {
    ob_start();// Starte den Output Buffer
    extract($data);// Extrahiere die Daten aus dem Array in separate Variablenv
    require $path;    // Lade die angegebene Datei (View)
    $content = ob_get_contents();// Hole den Inhalt des Output Buffers und beende ihn
    ob_end_clean();

   
// Lade die Hauptlayout-Datei und übergebe den generierten Inhalt als Variable

    require __DIR__ . '/../views/layouts/main.view.php';
   
}

function e($html) {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}
