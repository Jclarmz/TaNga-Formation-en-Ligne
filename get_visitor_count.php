<?php
// Ici, vous devriez récupérer le nombre de visiteurs depuis votre source de données
$visitorCount = 100; // Remplacez cette valeur par le nombre réel

// Retourner le nombre de visiteurs au format JSON
header('Content-Type: application/json');
echo json_encode(array('count' => $visitorCount));
?>
