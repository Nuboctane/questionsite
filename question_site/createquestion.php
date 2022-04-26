<?php
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h2>create a question</h2>
    <hr>
    <?php
    $pre_question = $_POST["question"]
    ?>
    <form action="ask.php" method="POST">
        <input id="ask" name="question" value="<?php echo $pre_question ?>">
        <br>
        <textarea id="context" placeholder="context" name="context"></textarea>
        <br>
        <label for="type">type of question:</label>
        <select name="type" id="type">
            <option value="any%">any%</option>
            <option value="medical">medical</option>
            <option value="groceries">groceries</option>
            <option value="online help">online help</option>
        </select>
        <button id='submit'>send</button>
    </input>
    </form>
</body>
</html>