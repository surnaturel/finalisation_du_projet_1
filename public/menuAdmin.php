<?php
  require_once("identifier.php");
?>
<!-- Menu -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">SCHIPHRAT</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./client.php">Patiants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./personel.php">Personel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./utilisateurs.php">Utilisateur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="./login.php" class="btn btn-outline-info active" role="button" aria-pressed="true">Connexion</a>
      &nbsp 
      <a href="#" class="btn btn-outline-warning active" role="button" aria-pressed="true">Inscription</a>
    </form>
  </div>
</nav>
