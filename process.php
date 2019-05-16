<!DOCTYPE html>
<?php
$epost = "";
if(isset($_GET["epost"])){
    $epost = $_GET['epost'];

    addToDatabase($epost);
}
?>
<?php
function addToDatabase($epost){
    $dbServer = "localhost";
    $username = "dbtrain_965";
    $password = "htfsyg";
    $dbname = "dbtrain_965";

    $conn = new mysqli($dbServer, $username, $password, $dbname);

    if($conn->connect_error)
    {
        die("något gick fel: " . $conn->connect_error);
    }
    $sql = "INSERT INTO användare (epost) VALUES ($epost)" ;
    if ($conn ->query($sql) === TRUE){
        echo "personen inlagd";
    }else{
        echo "Något gick fel i sqlanropet: " . $sql . "<br>" . $conn->error;
    }
}
?>