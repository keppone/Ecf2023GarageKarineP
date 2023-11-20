<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V. Parrot</title>
    <link rel="stylesheet" href = "assets/bootstrap.min.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-ligh bg-info">
    <div class="container-fluid">
        <a class="navbar-brand"> 
            <img alt="V. PARROT" src="/Applications/MAMP/htdocs/Ecf2023GarageKarineP/pictures/logo V.Parrot.png" width="30" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Ecf2023GarageKarineP/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                    <a class="nav-link" href="/Ecf2023GarageKarineP/login">Connexion</a>
                </li> 
                <?php if (isset($_SESSION['auth'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Ecf2023GarageKarineP/logout">Se déconnecter</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
        <?= $content ?>
    </div>

    <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>