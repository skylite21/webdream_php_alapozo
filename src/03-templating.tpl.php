
<?php require '03-templating.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1> Hello  <?= $name; ?> </h1>
  <h2> Mai dátum: <?= $date; ?>
  </h2>
  <?php if (isset($term)) : ?>
    <h2>You searched for: <?= $term; ?>  </h2>
  <?php endif; ?>
</body>
</html>

