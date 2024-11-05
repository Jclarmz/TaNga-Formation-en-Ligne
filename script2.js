const quizForm = document.getElementById('quizForm');
const resultsDiv = document.getElementById('results');
const nameResult = document.getElementById('nameResult');
const scoreResult = document.getElementById('scoreResult');
const feedback = document.getElementById('feedback');

quizForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.getElementById('name').value;
  const q1Answer = parseInt(document.querySelector('input[name="q1"]:checked').value);
  const q2Answer = parseInt(document.querySelector('input[name="q2"]:checked').value);
  const q3Answer = parseInt(document.querySelector('input[name="q3"]:checked').value);
  const q4Answer = parseInt(document.querySelector('input[name="q4"]:checked').value);
  const q5Answer = parseInt(document.querySelector('input[name="q5"]:checked').value);
  
  // Ajoutez plus de réponses ici

  const totalScore = q1Answer + q2Answer + q3Answer + q4Answer + q5Answer;
  const maxScore = 5;  // Mettez à jour en fonction du nombre total de questions

  nameResult.textContent = `Nom : ${name}`;
  scoreResult.textContent = `Score : ${totalScore} / ${maxScore}`;

  let appreciation = '';
  if (totalScore === maxScore) {
    appreciation = 'Excellent !';
  } else if (totalScore >= maxScore / 5) {
    appreciation = 'A tapé à côté.';
  } else {
    appreciation = 'Résultat nul.';
  }

  feedback.textContent = `Appréciation : ${appreciation}`;

  resultsDiv.style.display = 'block';
});