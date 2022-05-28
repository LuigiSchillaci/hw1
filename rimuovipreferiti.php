<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "phonemania");
$correnteuser = $_SESSION["username"];
$nome=$_GET['q'];
$query = "DELETE FROM preferiti WHERE user = '$correnteuser' && nome = '$nome'";
$res = mysqli_query($conn, $query);
mysqli_close($conn);
exit;
?>