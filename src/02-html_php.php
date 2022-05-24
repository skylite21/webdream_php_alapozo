<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php $name = 'Péter'; ?>
<h1> Hello  <?php echo $name; ?> </h1>
  <h2> Mai dátum:
    <?php
    date_default_timezone_set('Europe/Budapest');
    $pattern = 'yyyy MMMM d. HH:mm:ss';
    echo datefmt_format(new IntlDateFormatter('hu_HU',
                        pattern: $pattern), time() );
    ?> 
  </h2>
  <?php if (isset($_GET['term'])) : ?>
    <h2>You searched for: <?= htmlspecialchars($_GET['term']); ?>  </h2>
  <?php endif; ?>
  
</body>
</html>

