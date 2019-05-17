<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Pt4 - Exercice 8</title>
</head>
<body>
  <h1>Exercice 8</h1>
<?php
function addition($nb1 = 3, $nb2 = 12, $nb3 =18)
{
  $resultat = $nb1 + $nb2 + $nb3;
  return 'résultat : ' . $resultat;
}
echo addition();
 ?>
</body>
</html>
