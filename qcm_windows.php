<?php

    // Liste des questions avec leurs réponses possibles
    $questions = array(
        "Quelle est la capitale de la France ?" => array(
            "a" => "Londres",
            "b" => "Paris",
            "c" => "Madrid"
        ),
        "Quelle est la couleur du ciel ?" => array(
            "a" => "Vert",
            "b" => "Bleu",
            "c" => "Rouge"
        ),
        "Quel est le plus grand pays du monde ?" => array(
            "a" => "La Russie",
            "b" => "La Chine",
            "c" => "Les États-Unis"
        )
    );

    // Mélanger les questions
    shuffle($questions);

    // Afficher les questions
    echo "<form method='post'>";
    foreach ($questions as $question => $reponses) {
        echo "<p>$question</p>";
        // Mélanger les réponses
        shuffle($reponses);
        foreach ($reponses as $key => $reponse) {
            echo "<label><input type='radio' name='$question' value='$key'>$reponse</label><br>";
        }
    }
    echo "<input type='submit' name='submit' value='Soumettre'>";
    echo "</form>";

    // Calculer la note
    $note = 0;
    $nombre_de_questions = count($questions);
    foreach ($questions as $question => $reponses) {
        if (isset($_POST[$question])) {
            $reponse_utilisateur = $_POST[$question];
            $reponse_correcte = array_search($reponse_utilisateur, $reponses);
            if ($reponse_correcte === "a") {
                $note++;
            }
        }
    }

    // Afficher l'appréciation
    if ($note == $nombre_de_questions) {
        echo "<p>Bravo ! Vous avez obtenu la note maximale.</p>";
    } elseif ($note >= ($nombre_de_questions / 2)) {
        echo "<p>Pas mal, mais vous pouvez faire mieux.</p>";
    } else {
        echo "<p>Dommage, vous devez revoir vos connaissances.</p>";
    }

?>