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
        <form>
            <input type="text" placeholder="Zoeken" title="Zoek naar patienten" name="search">
            <button type="submit"><i title="zoeken..." class="fa fa-search"></i></button>
        </form>
        <button title="uitloggen" onclick="location.href='/HealthOne/backend/logout.php'" id="logout" >Uitloggen</button>
        </div>
    </header>
    <nav>

    </nav>
    <main>

    </main>
</body>

</html>