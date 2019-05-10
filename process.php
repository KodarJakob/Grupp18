<!DOCTYPE html>
<?php
$epost = "";
if(isset($_GET["e-post"])){
    $epost = $_GET['e-post¨'];

    addToDatabase($epost);
}
?>
<?php
function addToDatabase($namn){
    $dbServer = "dbtrain.im.uu.se";
    $username = "dbtrain_965";
    $password = "htfsyg";
    $dbname = "användare";

    $conn = new mysqli($servername, $username, $password, $dbname)

    if ($conn->connect_error)
    {
        die("något gick fel: " . $conn->connect_error);
    }
    $sql = "INSERT INTO användare (e-post) VALUES ($epost)" 
}
?>