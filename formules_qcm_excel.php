<!DOCTYPE html>
<html>
<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TaNga | QCM interactif</title>
  <!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="images/tangaT.png" type="image/png">
</head>
<body>
  <h1>TaNga | QCM : Formules</h1>
  <form id="quizForm">
    <label for="name">Veuillez saisir votre nom s'il vous plaît :</label>
    <input type="text" id="name" required><br><br>

    <p>1. Qu'est-ce que Excel ?</p>
    <input type="radio" name="q1" value="0"> a) Cest un tableau<br>
    <input type="radio" name="q1" value="0"> b) C'est un ensemble de cases<br>
    <input type="radio" name="q1" value="1"> c) C'est un tableur<br><br>

    <p>2. Par quoi est représentée une ligne ?</p>
    <input type="radio" name="q2" value="0"> a) Par une lettre<br>
    <input type="radio" name="q2" value="0"> b) Par un point<br>
    <input type="radio" name="q2" value="1"> c) Par un chiffre<br><br>

    <p>3. Par quoi est représentée une colonne ?</p>
    <input type="radio" name="q3" value="0"> a) Par un point<br>
    <input type="radio" name="q3" value="0"> b) Par un chiffre<br>
    <input type="radio" name="q3" value="1"> c) Par une lettre<br><br>

    <p>4. Qu'est-ce qu'une cellule ?</p>
    <input type="radio" name="q4" value="0"> a) Plusieurs lignes et colonnes<br>
    <input type="radio" name="q4" value="0"> b) Un ensemble de lignes<br>
    <input type="radio" name="q4" value="1"> c) Une intersection entre une ligne et une colonne<br><br>

    <p>5. Le format des cellules</p>
    <input type="radio" name="q5" value="0"> a) inclut une lettre<br>
    <input type="radio" name="q5" value="0"> b) inclut un chiffre<br>
    <input type="radio" name="q5" value="1"> c) inclut la police, la taille de la police, la couleur de la police, les bordures, les arrière-plans, les nombres de décimales, les formats de date, etc<br><br>

    <input type="submit" value="Soumettre">
  </form>

  <div id="results" style="display: none;">
    <h2>Résultats</h2>
    <p id="nameResult"></p>
    <p id="scoreResult"></p>
    <p id="feedback"></p>
  </div>

  <form action="cours-excel2.html" method="post">
    <input type="submit" value="Retour">
  </form>

  <script src="script2.js"></script>
</body>
</html>