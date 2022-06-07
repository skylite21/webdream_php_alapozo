<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="<?= $_SERVER['PHP_SELF'] ?>" method='get'>
  <input type="text" name='name'>
  <select name="subscription_type[]" id="type" multiple>
    <option value="professional">Professional</option>
    <option value="basic">Basic</option>
    </select>
  <input type="checkbox" name="package_no[]", value="1 package">
  <input type="checkbox" name="package_no[]", value="2 package">
  <input type="checkbox" name="package_no[]", value="3 package">
  <input type="checkbox" name="package_no[]", value="4 package">
  <button type="submit" >Subscribe</button>
</form>
  <?php
  if (isset($_GET['name'])) {
    var_dump($_GET);
  }
  ?>
</body>
</html>


