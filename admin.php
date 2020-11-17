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
    <header>
        <div>
            <img src="/healthone/frontend/static/images/logo.png" alt="Logo" id="logo">
            <div class="search-container">
                <form>
                    <input type="text" placeholder="Zoeken" title="Zoek naar patienten" name="search">
                    <button type="submit"><i title="zoeken..." class="fa fa-search"></i></button>
                </form>
            </div>
            <div>
                <button id="logout" title="uitloggen"
                    onclick="location.href='/HealthOne/backend/logout.php'">Uitloggen</button>
            </div>
        </div>
    </header>
    <nav>
        <section>
            <ul>
                <li><button> Home </button></li>
                <li><button> Medicijnen </button></li>
                <li><button> Patiënten </button></li>
                <li><button> Artsen </button></li>
                <li><button> Apotheken </button></li>
                <li><button> Betalen </button></li>
            </ul>
        </section>
    </nav>
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
                <section class="logs">

                </section>
            </div>
        </div>
    </main>
</body>

</html>