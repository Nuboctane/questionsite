<?php
include_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();

$chat_id=$_POST["chat_id"];
$query= "SELECT * FROM `vragen` WHERE chat_id='{$chat_id}'";
$result = mysqli_query($conn, $query) or die('Cannot fetch data from database. '.mysqli_error($conn));

if(mysqli_num_rows($result) > 0) {
    while($v = mysqli_fetch_assoc($result)) {
        $title=$v['vraag_header'];
        $context=$v['vraag_context'];
        $datum=$v['vraag_datum'];
        $type=$v['vraag_type'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $title ?></h1>
    <h2><?php echo $context ?></h2>
    <hr>
    <h2>chat</h2>
    <hr>
    <form action="answer.php" method="POST">
                <section style="padding: 20px;">
                    <div class="container">
                        <div class="item">
                            <input hidden name='chatid' value="<?php echo $chat_id ?>"> 
                            <input id="ask" name="answer" style="width: 50%; border: none;border-bottom: 2px solid gray;padding: 10px;" type="text" placeholder="Beantwoord deze vraag">
                            <button style="width:150px ;background-color: #FF7800; border: 1px black; padding: 10px; border-radius: 25px; color: white; font-family: sans-serif;
                         font-size: medium; margin-top: 77px; margin-right: 20px;" id='submit'>
                         beantwoord</button>
                        </div>
                    </div>
                </section>
            </form>
    <?php
        $query = "SELECT * FROM $chat_id ORDER BY id DESC";
        $result = mysqli_query($conn, $query) or die('Cannot fetch data from database. '.mysqli_error($conn));
        if(mysqli_num_rows($result) > 0) {
             while($v = mysqli_fetch_assoc($result)) {
                  echo '<div id="questionbubble" style="background-color: #f0f0f0;">
                  <h3 id="questionheaderbubble">' . $v['username']  . '</h3>
                  <h5 id="contextbubble">' . $v['msg']  . '</h5>
                  <h4 id="datebubble">' . $v['reg_date'] . '</h4>
                  </div>'; 
             }
        }
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</body>
</html>