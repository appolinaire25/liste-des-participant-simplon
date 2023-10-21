<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <title>Liste des participants</title>
</head>
<body>

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
          <section class="container py-5">
            <div class="row">
                <div class="col-lg-8 col-sm mb-5 mx-auto">
                    <h1 class="fs-4 text-center lead text-danger">Liste des participants</h1>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="enregistrement.php" class="btn btn-dark btn-sm me-3"><i class="fas fa-folder-plus"> S'enregistre</i></a>
                    <a href="#" class="btn btn-danger btn-sm" id="export"><i class="fas fa-table"> Export</i>
                    </a>
                </div>
            </div>
            <div class="dropdown-driver border-danger"></div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-0">Liste des participants</h5>
                </div>
            </div>
            <div class="dropdown-driver border-danger"></div>
            <div class="row">
                <div class="table-responsive" id="orderTable">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $conn = new mysqli("sql209.infinityfree.com	
                ", "if0_35271181", "Jyuf9Jnwvx2Oii", "if0_35271181_simplon");

                
                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                    $count_query = "SELECT COUNT(*) as total FROM participants";
                    $count_result = $conn->query($count_query);

                    if ($count_result && $count_result->num_rows > 0) {
                        $row = $count_result->fetch_assoc();
                        $total_rows = $row['total'];
                    } else {
                        $total_rows = 0;
                    }

                
                $nombre_par_page = 10;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $debut = ($page - 1) * $nombre_par_page;

                
                $query = "SELECT id, nom_participant, prenom_participant, num_participant, email_paticipant 
                FROM participants
                LIMIT $debut, $nombre_par_page";
                $result = $conn->query($query);

                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nom_participant'] . "</td>";
                    echo "<td>" . $row['prenom_participant'] . "</td>";
                    echo "<td>" . $row['num_participant'] . "</td>";
                    echo "<td>" . $row['email_paticipant'] . "</td>";
                    echo "</tr>";
                }

                
                $conn->close();
                ?>
            </tbody>
        </table>

        
        <ul class="pagination justify-content-center">
            <?php
            
            $total_pages = ceil($total_rows / $nombre_par_page);

            
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li class='page-item " . ($i == $page ? 'active' : '') . "'>";
                echo "<a class='page-link' href='votre_page.php?page=$i'>$i</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div> 
                </div>
            </div>
          </section>
          
    </div>
    <footer style="background-color: #000; color: #fff; text-align: center; padding: 10px;">
    Tous droits réservés Copyright © 2023
</footer>
    <script src="js/JQUERY.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
</body>
</html>