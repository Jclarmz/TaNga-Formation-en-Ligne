<?php
$score = 0;

// Calcul du score
if ($_POST['q1'] === 'a') {
    $score += 2;
}
if ($_POST['q2'] === 'a') {
    $score += 2;
}
if ($_POST['q3'] === 'a') {
    $score += 2;
}
if ($_POST['q4'] === 'b') {
    $score += 2;
}
if ($_POST['q5'] === 'b') {
    $score += 2;
}
if ($_POST['q6'] === 'a') {
    $score += 2;
}
if ($_POST['q7'] === 'b') {
    $score += 2;
}
if ($_POST['q8'] === 'b') {
    $score += 2;
}
if ($_POST['q9'] === 'a') {
    $score += 2;
}

// Détermination de la mention
$mention = '';
if ($score >= 17) {
    $mention = 'EXCELLENT';
} elseif ($score >= 14) {
    $mention = 'BIEN';
} elseif ($score >= 10) {
    $mention = 'MOYEN';
} else {
    $mention = 'PAS DE MENTION';
}

// Envoi du résultat par email
$to = 'contact@tangads.com';
$subject = 'Résultat du QCM';
$message = 'Score: ' . $score . '/20' . "\n";
$message .= 'Mention: ' . $mention;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// Redirection vers la page de confirmation
header('Location: confirmation.html');
?>
