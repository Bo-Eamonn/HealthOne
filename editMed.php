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
                <div class="med">
                    <?php
                    try{
                        include("backend/connectDB.php");
                        $query = $db->prepare("SELECT * FROM med WHERE id = " . $_GET['id']);
                        $query->execute();
                        $result = $query->fetchALL(PDO::FETCH_ASSOC);

                        
                        


                    }catch(PDOException $e){
                        die ("Error!: " . $e->getMessage());
                        }
                ?>
                </div>
            </div>
        </div>
    </main>

<?php
require_once "frontend/web/footer.php";
?>