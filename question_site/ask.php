<?php
include_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();

date_default_timezone_set("Europe/Amsterdam");

function generateRandomString($length = 5) {
   include_once 'config/database.php';
   $db = new Database();
   $conn = $db->getConnection();

   $characters = '0123456789';
   $charactersLength = strlen($characters);
   $default = 'chat';
   $randomString = '';
   for ($i = 0; $i < $length; $i++) {
       $randomString .= $characters[rand(0, $charactersLength - 1)];
   }
   $randomString = $default . $randomString;
   $querycheck="SHOW TABLES LIKE '%chat%'";
   if ($conn->query($querycheck) === TRUE){
      generateRandomString($length = 5);
   }else{
      return $randomString;
   }
}

$my_str = strtolower($_POST["question"]);
$type = $_POST["type"];
$context = $_POST["context"];
$chatid=generateRandomString($length = 5);
$sql = "INSERT INTO `vragen`(`vraag_header`,`vraag_context`,`vraag_datum`,`vraag_type`,`chat_id`) VALUES ('$my_str','$context',NOW(),'$type','$chatid')";

$sql2 = "CREATE TABLE $chatid (
   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(30) NOT NULL,
   msg TEXT NOT NULL,
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";


// Poging uitvoeren query
if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
    // Uitvoeren query gelukt
    header("Location: index.php");

 } else {
    // Uitvoeren query mislukt
    echo "Error: " . $sql . "<br>" . $conn->error;
 }




$conn->close();

?>