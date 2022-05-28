<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }

    if(isset($_POST["password"])) {
            $password = $_POST["password"];

            if($_SESSION["password"] == $password) {

                header("Location: cambio.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;

            } else {

                    $errore = true;
            }

       }
    ?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="controllo_password.css"/>


<title>Phone Mania</title>
</head>
<body>
<?php
                if(isset($errore)){
                    echo '<script>alert("La password inserita non corrisponde")</script>';
                }
                ?>
    <nav>
        
         <img src="images.jfif">
         <form name="ricerca" id="ricerca">
         </form>
         <div id=menu>
         <a href="principale.php">Home</a>
        <a href="logout.php">Esci</a>
        <a href="profilo.php">Profilo</a>

        </div>
    </nav>
<header>
<h1>Cerca il tuo telefono e aggiungilo tra i preferiti</h1>
</header>


<section>
             <form name='form' method='post' id="dati">
             <h1>Inserisci la tua password attuale</h1>      
             <p><label>Password: <input type="password" name="password"></label></p>
             <button type="submit">Entra</button>
             </form>
</section>


            <footer>
    Luigi Schillaci 1000001824
    </footer>

     </body>
</html>