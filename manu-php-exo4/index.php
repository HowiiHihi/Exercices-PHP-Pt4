<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt4 - Exercice 4</title>
</head>
<body>
  <h1>Exercice 4</h1>

  <?php

  function comparaisonNombres($nb1, $nb2)
  {
if ($nb1 > $nb2) {
  echo 'Le premier nombre est plus grand';
}
elseif ($nb2 > $nb1) {
  echo 'Le deuxième nombre est plus grand';
}
else {
  echo 'Les deux nombres sont identiques';
}
  }

  comparaisonNombres(14,12);

  ?>

</body>
</html>
