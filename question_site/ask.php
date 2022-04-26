<?php
include_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();

date_default_timezone_set("Europe/Amsterdam");


$my_str = strtolower($_POST["question"]);
$type = $_POST["type"];
$context = $_POST["context"];
$sql = "INSERT INTO `vragen`(`vraag_header`,`vraag_context`,`vraag_datum`,`vraag_type`) VALUES ('$my_str','$context',NOW(),'$type')";

// Poging uitvoeren query
if ($conn->query($sql) === TRUE) {
    // Uitvoeren query gelukt
    header("Location: index.php");

 } else {
    // Uitvoeren query mislukt
    echo "Error: " . $sql . "<br>" . $conn->error;
 }

$conn->close();

?>