<?php 
    define('URL', 'http://localhost/projetAsso');
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->  
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="<?=URL.'/css/styles.css';?>">
    
    <title>L'Assosystème</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="<?=URL.'/index.php' ?>">
                    <h1><i class="las la-sync"></i> L'Assosystème</h1>
                </a>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL.'/page_assos.php' ?>">Associations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL.'/page_projets.php' ?>">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL.'/page_about.php' ?>">A propos</a>
                    </li>
                </ul>
            </div>
            <div>
                <span class="navbar-text">
                    <a href="#">Poster un projet</a>
                </span>
                <span class="navbar-text">
                    <a href="<?=URL.'/assos/inscription_asso.php' ?>">S'inscrire</a>
                </span>
                <span class="navbar-text">
                    <a href="#">Se connecter</a>
                </span>
            </div>
        </nav>
    </header>