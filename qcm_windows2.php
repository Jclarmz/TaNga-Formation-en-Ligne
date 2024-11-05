<?ophp
// Liste de questions et réponses possibles
$questions = array(
    "Question 1" => array(
        "Bonne réponse" => "a",
        "Réponse 2" => "b",
        "Réponse 3" => "c"
    ),
    "Question 2" => array(
        "Bonne réponse" => "b",
        "Réponse 2" => "a",
        "Réponse 3" => "c"
    ),
    "Question 3" => array(
        "Bonne réponse" => "c",
        "Réponse 2" => "a",
        "Réponse 3" => "b"
    )
);

// Initialisation des variables
$score = 0;
$numQuestions = count($questions);
$questionsUtilisées = array();

// Boucle pour poser des questions aléatoires
while (count($questionsUtilisées) < $numQuestions) {
    $questionIndex = array_rand($questions);
    if (!in_array($questionIndex, $questionsUtilisées)) {
        $questionsUtilisées[] = $questionIndex;
        echo $questionIndex . "<br>";
        foreach ($questions[$questionIndex] as $réponse => $value) {
            echo "<label><input type='radio' name='".$questionIndex."' value='".$value."'>".$réponse."</label><br>";
        }
        echo "<br>";
    }
}

// Vérification des réponses et calcul du score
foreach ($questions as $questionIndex => $réponses) {
    if ($_POST[$questionIndex] == $réponses['Bonne réponse']) {
        $score++;
    }
}

// Affichage du résultat et de l'appréciation
echo "Votre score est de ".$score." sur ".$numQuestions."<br>";
if ($score == $numQuestions) {
    echo "Félicitations, vous avez eu un score parfait !";
} elseif ($score >= $numQuestions/2) {
    echo "Pas mal, vous avez eu une bonne note.";
} else {
    echo "Dommage, vous pourrez faire mieux la prochaine fois.";
}
?>