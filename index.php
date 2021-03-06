
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOne | Inloggen</title>
    <link rel="stylesheet" href="/HealthOne/frontend/static/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <div class="login">
    <img src="/healthone/frontend/static/images/logo.png" alt="logo">
    <?php
        try{
            include ("backend/connectDB.php");
            if(isset($_POST['inloggen'])){
                $username = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_STRING);
                $password = sha1($_POST['pswrd']);
                $query = $db->prepare("SELECT * FROM users WHERE uname = :user AND pswrd = :pass");
                $query->bindParam("user", $username);
                $query->bindParam("pass", $password);
                $query->execute();
                if($query->rowCount() == 1){
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['username'] = $username;
                    header('Location: /HealthOne/home.php');
                } else{
                    echo "<p id='wrng'>Onjuiste gegevens!</p>";
                }
                echo "<br>";
                
            }
        }
            catch(PDOException $e){
            die ("Error!: " . $e->getMessage());
        }
    ?>
        
        <h1>login</h1>
        <form method="POST">
            <input type="text" placeholder="Gebruikersnaam" autocomplete="off" name="uname" required="required" id="uname">
            <div class="container"> 
                <input type="password" placeholder="Wachtwoord" autocomplete="off" name="pswrd" required="required" id="pswrd">
                    <i class="far fa-eye" id="pswrdToggle"></i>
            </div> 
            <select>
                <option value="1">Arts</option>
                <option value="2">Apotheker</option>
                <option value="3">Zilverenkruis</option>
            </select>
            <button name="inloggen" type="submit">Inloggen</button>
        </form>
    </div>
    <script src="/HealthOne/frontend/static/js/pswrdToggle.js"></script>
</body>

</html>