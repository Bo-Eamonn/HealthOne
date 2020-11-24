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
            <button onclick="document.getElementById('medAddModal').style.display='block'">Toevoegen</button>
            <div class="table">
                <?php
                        try{
                            include("backend/connectDB.php");
                            $query = $db->prepare("SELECT * FROM med");
                            $query->execute();
                            $result = $query->fetchALL(PDO::FETCH_ASSOC);
                            echo "<table>";
                            echo "<tr>";     
                                echo "<th>Naam</th>";                       
                                echo "<th>Categorie</th>";   
                                echo "<th>edit</th>";   
                            echo "</tr>";                       
                                foreach ($result as &$data) {
                                echo "<tr>";    
                                    echo "<td id='" . $data["insured"]."'>" . $data["name"] . " </td>";
                                    echo "<td id='" . $data["insured"]."'>" . $data["cat"] . " </td>";
                                    echo "<td id='" . $data["insured"]."'>" . "<a title='Edit'><i class='fa fa-pen' aria-hidden='true'></i></a>
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
<?php
require_once "frontend/web/med/medAdd.php";
?>