<?php
include_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();

date_default_timezone_set("Europe/Amsterdam");

$my_str = strtolower($_POST["answer"]);
$chatid=$_POST["chatid"];
$sql = "INSERT INTO `$chatid`(`username`,`msg`,`reg_date`) VALUES ('anonymous','$my_str',NOW())";

// Poging uitvoeren query
if ($conn->query($sql)) {
    // Uitvoeren query gelukt
    
    echo 'your answer has been submitted <form method="POST" action="article.php">
    <input hidden name="chat_id" value='.$chatid.'></input>
    <button id="submitbubble">back</button>
    </form>';
 } else {
    // Uitvoeren query mislukt
    echo "Error: " . $sql . "<br>" . $conn->error;
 }




$conn->close();

?>
