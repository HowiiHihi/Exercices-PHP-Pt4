<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt4 - Exercice 6</title>
</head>
<body>
  <h1>Exercice 6</h1>

  <?php
  function ageGender($age, $gender)
  {
    if ($gender == 'homme' && $age <=17) {
      echo 'Vous êtes un homme et vous êtes mineur.';
    }
    elseif ($gender == 'femme' && $age <=17) {
      echo 'Vous êtes une femme et vous êtes mineure.';
    }
    elseif ($gender == 'femme' && $age >=18) {
      echo 'Vous êtes une femme et vous êtes majeure.';
    }
    else {
      echo 'Vous êtes un homme et vous êtes majeur.';
    }
  }
  echo ageGender(22, 'femme');
  ?>

</body>
</html>
