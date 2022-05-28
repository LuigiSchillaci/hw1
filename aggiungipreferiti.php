<?php
//starta la sessione
session_start();


$conn = mysqli_connect("localhost", "root", "", "phonemania");
//mi passo le informazioni da aggiungere
$correnteuser = $_SESSION["username"];
$immagine=$_GET['q'];
$nome=$_GET['b'];
$brand=$_GET['a'];
$query = "INSERT INTO preferiti VALUES ('$correnteuser', '$nome', '$brand', '$immagine')";
$res = mysqli_query($conn, $query);
mysqli_close($conn);
exit;
?>