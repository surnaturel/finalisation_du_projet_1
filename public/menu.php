<?php
  error_reporting(-1);
  ini_set("display_errors", 1);
  require_once("../pages/identifier.php");
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
      <?php if($_SESSION['user']['role']=='admin'){?>
        <li class="nav-item">
          <a class="nav-link" href="./utilisateurs.php">Utilisateur</a>
        </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">Contact</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="../pages/editerLoginU.php?id_personel=<?php echo $_SESSION['user']['id_personel']?>"><?php if ($_SESSION['user']['sexe'] == 'M') : ?><i class="fas fa-male"></i>&nbsp;<?php echo "  " .$_SESSION['user']['login']?> &nbsp;&nbsp;<?php else :?> <i class="fas fa-female">&nbsp;</i><?php echo "  " .$_SESSION['user']['role']?><?php endif; ?>
      </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="seDeconnecter.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
          Se deconnecter</a>
      </li>
    </ul>
  </div>
</nav>
