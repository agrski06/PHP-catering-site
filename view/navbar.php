<nav class="d-flex justify-content-center py-3 border-bottom fixed-top bg-white">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a href="index.php?content_id=home" aria-current="page"><img src="img/logo.png" alt="" style="max-width: 45px;">
        </a>
      </li>
      <li class="nav-item"><a href="index.php?content_id=ingredients" class="nav-link">Danie</a></li>
      <li class="nav-item"><a href="index.php?content_id=orders" class="nav-link">Zamówienie</a></li>
      <li class="nav-item"><a href="index.php?content_id=about" class="nav-link">O nas</a></li>
      <?php 
      if (isset($_SESSION["userId"])) {
        echo '<li class="nav-item"><a href="index.php?content_id=account" class="nav-link">Konto</a></li>';
      } 
      else {
        echo '<li class="nav-item"><a href="index.php?content_id=login" class="nav-link">Zaloguj</a></li>';
        echo '<li class="nav-item"><a href="index.php?content_id=register" class="nav-link">Zarejestruj</a></li>';
      }
      ?>
    </ul>
  </nav>