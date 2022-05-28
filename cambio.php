<?php

    //starta la sessione
    session_start();
    // Verifica se l'utente è loggato
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }


//controllo che i campi non siano vuoti
if(isset($_POST["nome"]) && isset($_POST['cognome']) && 
       isset($_POST['username']) && isset($_POST['password'])){

        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $username)) {
            $errore_username = true;
        } 
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $nome)) {
            $errore_nome = true;
        } 
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $cognome)) {
            $errore_cognome = true;
        } 
        $conn = mysqli_connect("localhost", "root", "", "phonemania");
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $query = "SELECT username FROM login where username='$username'";
        $res = mysqli_query($conn, $query);
        //verifico che già non esiste
        if (mysqli_num_rows($res) > 0)
            $errore_username = true;
        mysqli_free_result($res);
        mysqli_close($conn);

        if(!isset($errore_username)){
            // Connetti al database
            $conn = mysqli_connect("localhost", "root", "", "phonemania");
            if (!$conn) {
                die("Connessione Fallita");
                }

                $nome = mysqli_real_escape_string($conn, $_POST['nome']);
                $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $hashedpassword =  md5($password);

                $vecchio_username =  $_SESSION["username"];
                $query = "UPDATE login SET Nome = '$nome' , Cognome = '$cognome' , Username = '$username' , Password = '$hashedpassword' where Username = '$vecchio_username'";
                echo($query);
                $res = mysqli_query($conn, $query);
        mysqli_close($conn);
         $_SESSION["username"] = $username;
        $_SESSION["password"] = $_POST["password"];
        header("Location: login.php");
        exit;
         }
       }

        ?>


<html>
      <head>
        <link rel='stylesheet' href='login.css'>
        <script src='login.js' defer></script>
    </head>

    <body>
    <?php
               if (isset($errore_username)) {
                echo '<script>alert("Username esistente o caratteri non validi")</script>';
            }
            if (isset($errore_nome)) {
                echo '<script>alert("nome non valido")</script>';
            }
            if (isset($errore_cognome)) {
                echo '<script>alert("cognome non valido")</script>';
            }
       ?>
              

 
<div class="container">
<img src="images.jfif">

<h1>Nuove credenziali</h1>
                <form name='form' method='post'>
                <p><label>Nome <input type='text' name='nome'></label></p>

                <p><label>Cognome <input type='text' name='cognome'></label></p>

                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <button type="submit">Cambio Credenziali</button>
                    <button onclick="location.href='login.php'" type="button">Indietro</button>       
       
				 </form>
        </div>
</div>
    </body>
</html>
