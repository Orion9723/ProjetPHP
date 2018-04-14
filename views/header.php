<!DOOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
    <title id="title"> Site du club de course </title>
</head>
<header>
    <img href="index.php" src="views/images/background.png" alt="background" id="background">
    <nav>
        <ul id="menu1" class="nav nav-tabs">
            <li><a href="index.php?action=home">Accueil</a></li>
            <li><a href="index.php?action=event">Evénement</a>
                <ul id="menu2">
                    <li><a href="index.php?action=addEvent">Ajouter un événement</a></li>
                    <li><a href="index.php?action=consultEvent"></a>Consulter un événement</li>
                    <li><a href="index.php?action=changeEvent"></a>Modifier un événement</li>
                </ul>
            </li>
            <li><a href="index.php?action=fee">Cotisation</a></li>
            <li><a href="index.php?action=Membre">Membre</a>
            <ul id="menu2">
                <li><a href="index.php?action=changeInfos">Informations du compte</a></li>
                <li><a href="index.php?action=plan">Consulter le plan</a> </li>
            </ul>
            </li>
            <li><a href="index.php?action=<?php echo $actionloginadmin ?>"><?php echo $libelleloginadmin ?></a></li>
        </ul>
    </nav>
    <p><a href="index.php?action=logout">Se déconnecter</a></p>
</header>
<body>