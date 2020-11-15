<?php
$username = 'Bo-Eamonn de Snoo';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOne | Doktor</title>
    <link rel="stylesheet" href="/HealthOne/frontend/static/css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <nav>
        <?php
        session_start();
        if ($_SESSION['login'] == true) {
        echo "<p style='align-self: center;'>Welkom: " . $_SESSION['username'] . "</p>";
        } else {
            header('Location: /healthOne/');
        }
        ?>
        <div class="topnav">
            <img class="logo" src="/HealthOne/frontend/static/images/logo.png" alt="logo">
            
            <button title="uitloggen" onclick="location.href='/HealthOne/backend/logout.php'" class="logout" >Uitloggen</button>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Zoeken" title="Zoek naar patienten" name="search">
                    <button type="submit"><i title="zoeken..." class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <main>

    </main>
</body>

</html>