<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $q1Answer = intval($_POST['q1']);
  $q2Answer = intval($_POST['q2']);
  $q3Answer = intval($_POST['q3']);
  $q4Answer = intval($_POST['q4']);
  $q5Answer = intval($_POST['q5']);
  
  // Calcul du score total et de l'appréciation
  $totalScore = $q1Answer + $q2Answer + $q3Answer + $q4Answer + $q5Answer;
  $maxScore = 5; // Mettez à jour en fonction du nombre total de questions

  if ($totalScore === $maxScore) {
    $appreciation = 'Excellent !';
  } elseif ($totalScore >= $maxScore / 5) {
    $appreciation = 'A tapé à côté.';
  } else {
    $appreciation = 'Résultat nul';
  }

  // Envoi par e-mail
  $to = "tangaelearning@gmail.com"; // Remplacez par l'adresse e-mail où vous voulez recevoir les résultats
  $subject = "Résultats du QCM";
  $message = "Nom : $name\n";
  $message .= "Score : $totalScore / $maxScore\n";
  $message .= "Appréciation : $appreciation\n";

  mail($to, $subject, $message);
}
?>