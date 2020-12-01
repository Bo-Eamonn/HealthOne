<?php
require_once "frontend/web/header.php";
require_once "frontend/web/nav.php";
?>
    <main>
        <div class="content">
            <img src="/healthone/frontend/static/images/profilePicture/profilePlaceholder.png" alt="Profiel Foto">
            <?php
                session_start();
                if ($_SESSION['login'] == true) {
                echo "<h1>Welkom: " . $_SESSION['username'] . "</h1>";
                } else {
                    header('Location: /healthOne/');
                }
            ?>
            <div class="container">
                <div class="table">
                    <?php
                        try{
                            include("backend/connectDB.php");
                            $query = $db->prepare("SELECT * FROM patients");
                            $query->execute();
                            $result = $query->fetchALL(PDO::FETCH_ASSOC);
                            echo "<table>";
                            echo "<tr>";     
                                echo "<th>Naam</th>";                          
                                echo "<th>Geboorte datum</th>";                          
                                echo "<th>Zorg Nummer</th>";                          
                                echo "<th>Edit</th>";                          
                            echo "</tr>";                       
                                foreach ($result as &$data) {
                                echo "<tr>";    
                                    echo "<td>" . $data["naam"] . " </td>";
                                    echo "<td>" . $data["geboortedatum"] . " </td>";
                                    echo "<td>" . $data["zknummer"] . " </td>";
                                    echo "<td>" . "<a title='Edit'><i class='fa fa-pen' aria-hidden='true'></i></a>
                                                    <a title='Delete'><i class='fa fa-trash' aria-hidden='true'></i></a>" . " </td>";
                                echo "</tr>";
                            }
                            echo "</table>";     
                            } catch(PDOException $e){
                            die("Error!: " . $e->getMessage());
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>

<?php
require_once "frontend/web/footer.php";
?>