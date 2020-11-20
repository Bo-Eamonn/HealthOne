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
                <div class="logs">
                    
                </div>
            </div>
        </div>
    </main>
<?php
require_once "frontend/web/footer.php";
?>