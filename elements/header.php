<link rel="stylesheet" href="/goodnews/divers/css/header.css">

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12  d-flex justify-content-center" >
                <a href="/goodnews/index.php"><img class="img-fluid" src="/goodnews/divers/images/logoblanc.png" alt="logo"></a>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid  navbarNav p-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse spacement" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/index.php">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/controller/router.php?action=rubrik&rubrik=actualites">ACTUALITÉS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/controller/router.php?action=rubrik&rubrik=politique">POLITIQUE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/controller/router.php?action=rubrik&rubrik=economie">ÉCONOMIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/controller/router.php?action=rubrik&rubrik=sport">SPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/controller/router.php?action=rubrik&rubrik=technologies">TECHNOLOGIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-5" href="/goodnews/controller/router.php?action=rubrik&rubrik=culture">CULTURE</a>
                </li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="/goodnews/elements/register.php"><i class="fa-solid fa-circle-user ps-5"></i></a>
                    </li>
                <?php if(!isset($_SESSION['LOGGED_USER'])) :?>
                    <li class="nav-link">
                        <a class="nav-link" href="/goodnews/elements/login.php">CONNEXION</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" ><?php echo $_SESSION['LOGGED_USER'];?></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/goodnews/elements/logout.php">Déconnexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Mon compte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
            <p>Nom d'utilisateur : <?php echo $_SESSION['LOGGED_USER']; ?></p>
        </div>
        <div class="col-md-12">
            <p>NOM : <?php echo $_SESSION['lastname']; ?></p>
        </div>
        <div class="col-md-12">
            <p>Prénom : <?php echo $_SESSION['firstname']; ?></p>
        </div>
        <div class="col-md-12">
            <p>Adresse email : <?php echo $_SESSION['email']; ?></p>
        </div>
        <div class="col-md-12">
            <p>Ville : <?php echo $_SESSION['city']; ?></p>
        </div>
        <div class="col-md-12">
            <p>Country : <?php echo $_SESSION['country']; ?></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/goodnews/elements/modifProfil.php" class="btn btn-secondary">Modifier mes informations</a>
      </div>
    </div>
  </div>
</div>
<script src="/goodnews/divers/js/styles.js"></script>