<?php

    // Avvia la sessione
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "phonemania");
    $correnteuser = $_SESSION["username"];
    //elimino l account
    $query = "DELETE FROM login WHERE username = '".$correnteuser."'";
    $res = mysqli_query($conn, $query);
    //verifico se è stato eliminato
    $query = "SELECT * FROM login WHERE username ='".$correnteuser."'";
    $res = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($res);
    if($num_rows>0){
        $eliminato = 0;
    } else {
        $eliminato = 1;
        session_destroy();
        mysqli_close($conn);
    }
    echo $eliminato
?>