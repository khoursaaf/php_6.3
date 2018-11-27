<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Afficher dans url!</a>
    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])) { ?>
    <p>
      <?= 'Les paramètres sont bien présent.'; ?>
    </p>
    <?php
    }
    else {
    ?>
    <p>
      <?= 'Les paramètres ne sont pas présent'; }?>
    </p>
  </body>
</html>
