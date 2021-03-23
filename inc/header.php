<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon CV - Portfolio</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon-32x32.png">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    </head>
    <body class="contact" id="haut">

        <div id="scrollUp">
            <a href="#haut"><i class="fas fa-chevron-circle-up"></i></a>
        </div>

        <header class="container-fluid bghf mb-4">
            <nav class="navbar navbar-expand-lg navbar-dark bghf fixed-top">
                <a class="navbar-brand" href="#"><img src="img/logohyna.png" width="80px" alt="" srcset=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="./" class="nav-link <?php if ($page == "home") echo 'active'; ?>">CV</a>
                        </li>
                        <li class="nav-item">
                            <a href="./portfolio.php" class="nav-link <?php if ($page == "portfolio") echo 'active'; ?>">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="./contact.php" class="nav-link <?php if ($page == "contact") echo 'active'; ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>