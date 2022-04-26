
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Home</title>
</head>
<body>
    <form action="createquestion.php" method="POST" >
        <input id="ask" name="question" placeholder="stel een vraag"></input>
        <button id="submit">vraag</button>
    </form>
    <hr>
    <h2>vragen</h2>
    <br>
    <?php
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();

    $query = "SELECT * FROM `vragen`";
    $result = mysqli_query($conn, $query) or die('Cannot fetch data from database. '.mysqli_error($con));
    if(mysqli_num_rows($result) > 0) {
         while($v = mysqli_fetch_assoc($result)) {
              echo '<div id="questionbubble">
              <h3 id="questionheaderbubble">' . $v['vraag_header']  . '</h3>
              <h5 id="questiontype">' . $v['vraag_type']  . '</h5>
              <h4 id="contextbubble">' . $v['vraag_context'] . '</h4>
              <i id="datebubble"><h5>' . $v['vraag_datum'] . '</h5></i>
              <a id="submitbubble">REPLY ></a>
              </div>'; 
         }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
</body>
</html>