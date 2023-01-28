<!DOCTYPE html>
<html lang="en">
<?php require_once('../view/head.php'); ?>

<body>
  <?php require_once('../view/navbar.php'); ?>

  <div id="app">
    <?php
    if (isset($_GET['content_id'])) {
      $router->show($_GET['content_id']);
    }
    ?>
  </div>

  <?php require_once('../view/footer.php'); ?>
</body>

</html>