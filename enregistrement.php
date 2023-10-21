<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Enregistrement des participants</title>
</head>
<body class="body-insct">
    
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
        <div class="form-container">
            <h1 class="text-center gap-2">BIENVENUE SUR LA PAGE D'ENREGISTREMENT DES PARTICIPANTS</h1>
        <h2 class="text-center">Inscription</h2>
        <form action="" method="post">
            <div class="mb-3 form-group">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control cont" id="nom" name="nom" required>
            </div>
            <div class="mb-3 form-group">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control cont" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3 form-group">
                <label for="numero" class="form-label">Numéro :</label>
                <input type="number" class="form-control cont" id="numero" name="numero" required>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control cont" id="email" name="email" required>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-danger" name="inscription">S'inscrire</button>
            </div>
        </form>
        

        <?php
        if (isset($_POST['inscription'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $numero = $_POST['numero'];
            $email = $_POST['email'];
    

            $servername = "sql209.infinityfree.com";
            $username = "if0_35271181";
            $password = "Jyuf9Jnwvx2Oii";
            $dbname = "if0_35271181_simplon";


            $conn = new mysqli($servername, $username, $password, $dbname);
    
            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
    
            $insert_query = "INSERT INTO participants (nom_participant, prenom_participant, num_participant, email_paticipant) 
                             VALUES ('$nom', '$prenom', '$numero', '$email')";
            
            if ($conn->query($insert_query) === TRUE) {
                header('location:index.html');
                exit();
            } else {
                echo "Erreur : " . $insert_query . "<br>" . $conn->error;
            }
    
            $conn->close();
        }
        ?>

    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>