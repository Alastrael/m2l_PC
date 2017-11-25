<!DOCTYPE html>

<?php

    require_once("afficher.php");

?>


<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="accueil.css">


    <link rel="stylesheet" type="text/css" href="doc/css/bootstrap.min.css">
    <script src="doc/js/bootstrap.min.js"></script>

    <title>Accueil - M2L</title>

</head>

<body>

    <div id="container" class="centrer">

        <header id="banner">
                    
                <div id="logo"><img src="doc\img\M2L.jpg" alt="Not found"></div>
                    
                <div id="titre">
                    <h1> <br> Accueil M2L</h1>
                </div>
                    
        </header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                      <a class="nav-link" href="#">Formations Inscrites<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">Offres de formation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Historique des formations</a>
                      </li>
                  

                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>

        </nav>
        

        <div id="tableauFormation">

            <div id="formations">

                <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">

                            <?php      
                            
                                nomFormation();
                            
                            ?>
                            
                        </a>


                        <a href="#" class="list-group-item list-group-item-action">Nom_formation_sql</a>
                        <a href="#" class="list-group-item list-group-item-action">Nom_formation_sql</a>
                        <a href="#" class="list-group-item list-group-item-action">Nom_formation_sql</a>
                        <a href="#" class="list-group-item list-group-item-action">Nom_formation_sql</a>
                </div>

            </div>
               





        </div>











        <footer>
            <p></p>
        </footer>

    </div> <!-- fin container !-->

       
</body>

</html>