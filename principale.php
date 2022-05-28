<?php

    // Avvia la sessione
    session_start();
    // Verifica se l'utente è loggato
    if(!isset($_SESSION['username']))
    {
        // Vai alla login
        header("Location: login.php");
        exit;
    }

   
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="principale.css" />
<script src='principale.js' defer></script>

<title>Phone Mania</title>
</head>
<body>

    <nav>
         <img src="images.jfif">
         <form name="ricerca" id="ricerca" method='GET'>
         <input type="search"  onfocus="this.value=''" value="Inserisci nome telefono da cercare" name="prodotto" id="prodotto" >
         <input  type="submit" value="Cerca">
         </form>
         <div id="menu">
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



    <footer>
    Luigi Schillaci 1000001824
    </footer>
</body>
</html>
