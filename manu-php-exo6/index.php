<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt4 - Exercice 6</title>
</head>
<body>
  <h1>Exercice 6</h1>

  <?php
  function text($lastName, $firstName, $nb)
  {
    echo 'Bonjour, ' . $lastName . ' ' . $firstName .' tu as ' . $nb . ' ans.';
  }
  echo text('Delamoule', 'Hubert', 29);
  ?>

</body>
</html>
