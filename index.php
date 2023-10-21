<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="">
    
    <div class="container">
        <header class="wrapper">
            <nav class="navbar navbar-expand-lg" style="background-color: #fff;">
                <div class="container-fluid ">
                   <a class="navbar-brand fs-4" href="index.html">
                    <img src="src/simplon(1).png" alt="Simplon Côte d'ivoire" width="150" height="50">
                   </a>
                   <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                 <div class="sidebar offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
             <div class="offcanvas-header text-white border-botton">
               <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <img src="src/simplon(1).png" alt="Simplon Côte d'ivoire" width="150" height="50">
               </h5>
               <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body ">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mx-2 mb-4">
                        <a href="enregistrement.php" class="text-white text-decoration-none px-3 py-1 rounded-4 justify-contenet-end " style="background-color: rgb(29, 19, 19);">S'enregistre</a>
                    </li>
                    <li class="nav-item mx-2 mb-4">
                        <a href="participant.php" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #ec0202;">Liste des participants</a>
                    </li>
                </ul>

             </div>
           </div>
         </div>
       </nav>
           </header>
        <div class="w-100 vh-100 d-flex flex-column justify-contenet-center align-items-center fs-1 pt-3">
            <h1 style="font-size: 1.5em;">Simplon vous remercie d'avoire</h1>
            <h1 style="font-size: 1.3em;">participe à l'évènement</h1>
            <img src="src/merci_red.jpg" alt="mercie">
            <h1 style="font-size: 0.8em;">Pour vous enregistre clique <a href="enregistrement.php">ici</a></h1>
        </div>
    </div>
    <footer style="background-color: #000; color: #fff; text-align: center; padding: 10px;">
        Tous droits réservés Copyright © 2023
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>