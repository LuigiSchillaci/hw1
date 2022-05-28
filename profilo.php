<!DOCTYPE html>
<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="profilo.css"/>
<script src='profilo.js' defer></script>
<script src='elimina.js' defer></script>
<title>Phone Mania</title>
</head>
<body>

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
<div id="telefono">

</div>




<div class="container">
<?php
    $utente_c = $_SESSION['username'];
    $messaggio="<div class='intestazione-profilo'><h1>Ecco il tuo profilo $utente_c qua puoi cambiare le tue credenziali</h1></div>";
    echo $messaggio;
?>
                <form name="cambio" id="cambio">
                 <label>Vuoi cambiare le tue credenziale?</label>
                 <button onclick="location.href='controllo_password.php'" type="button">Cambia Credenziali</button><br>
                 <label>Vuoi Eliminare il tuo account?</label>
                 <button  type="submit">Elimina Account</button>
            </div>



    <footer>
    Luigi Schillaci 1000001824
    </footer>
</body>
</html>
