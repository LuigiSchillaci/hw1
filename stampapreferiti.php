<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "phonemania");
$correnteuser = $_SESSION["username"];
$query = "SELECT nome,brand,immagine from preferiti where user = '$correnteuser'";
$res = mysqli_query($conn, $query);
$num_rows= mysqli_num_rows($res);
if($num_rows>0)
{
   for($i=0;$i<$num_rows;$i++)
   {
    $row[$i] = mysqli_fetch_row($res);
   }
}
echo json_encode($row);
mysqli_close($conn);
exit;
?>