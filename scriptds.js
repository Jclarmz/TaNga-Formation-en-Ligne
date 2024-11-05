document.getElementById('quizForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Récupérer le nom de l'utilisateur
    var userName = document.getElementById('name').value;

    // Initialiser le score
    var score = 0;

    // Récupérer les réponses du QCM
    var q1 = document.querySelector('input[name="q1"]:checked');
    var q2 = document.querySelector('input[name="q2"]:checked');
    var q3 = document.querySelector('input[name="q3"]:checked');
    var q4 = document.querySelector('input[name="q4"]:checked');
    var q5 = document.querySelector('input[name="q5"]:checked');

    // Calculer le score total (chaque bonne réponse vaut 2 points)
    if (q1 && q1.value === "1") score += 2;
    if (q2 && q2.value === "1") score += 2;
    if (q3 && q3.value === "1") score += 2;
    if (q4 && q4.value === "1") score += 2;
    if (q5 && q5.value === "1") score += 2;

    // Afficher le nom et le score
    document.getElementById('nameResult').innerText = "Nom : " + userName;
    document.getElementById('scoreResult').innerText = "Votre score : " + score + "/20";

    // Déterminer la mention en fonction du score et appliquer les styles
    var feedback = document.getElementById('feedback');
    if (score <= 9) {
        feedback.innerText = "Nul";
        feedback.style.color = "red";
    } else if (score >= 10 && score <= 13) {
        feedback.innerText = "Moyen";
        feedback.style.color = "darkred";
    } else if (score >= 14 && score <= 17) {
        feedback.innerText = "Bien";
        feedback.style.color = "green";
    } else if (score >= 18 && score <= 20) {
        feedback.innerText = "Excellent";
        feedback.style.color = "darkgreen";
    }

    // Afficher les résultats
    document.getElementById('results').style.display = "block";
});
