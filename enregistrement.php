<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Enregistrement des participants</title>
</head>
<body class="body-insct">
    
    <div class="container">
        <nav class="navbar nav-expand-lg bg-body-tertiary">
            <a href="index.html" class="navbar-brand">
                <img src="src/simplon(1).png" alt="Simplon Côte d'ivoire" width="150" height="50">
            </a>
            <a href="participant.html">
                <img src="src/person-circle.svg" at="" >  Participants
            </a>
        </nav>
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
    
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "secret";
            $dbname = "simplon";


            $conn = new mysqli($servername, $username, $password, $dbname);
    
            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
    
            // Insérer les données dans la table participant
            $insert_query = "INSERT INTO participants (nom_participant, prenom_participant, num_participant, email_paticipant) 
                             VALUES ('$nom', '$prenom', '$numero', '$email')";
            
            if ($conn->query($insert_query) === TRUE) {
              //  header('location:connexion.php');
                exit();
            } else {
                echo "Erreur : " . $insert_query . "<br>" . $conn->error;
            }
    
            // Fermer la connexion
            $conn->close();
        }
        ?>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>