<?php if (!isset($_COOKIE['name'])) : ?>
<form action"./cookie-test.php" method="POST">
  <input type="text" name="name">
  <button type="submit" name="subscribe">subscribe</button>
</form>
<?php else : ?>
<h1>Welcome <?php echo $_COOKIE['name'] ?> </h1>
<?php endif; ?>
<?php
if(isset($_POST['subscribe'])) {
  setcookie('name', $_POST['name'], time()+60 );
  header('Location: '.$_SERVER['PHP_SELF'], true, 303 );
}
?>
