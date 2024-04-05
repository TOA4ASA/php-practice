<?php
require '../head.php';
$db = new mysqli('localhost', 'root', '', 'practice');
$sql = 'select * from notes';
$notes = $db->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form method="get" action="../created">
        <div class="centralise">
            <textarea class='title'type="text" placeholder="title" name="title"></textarea><br>
            <textarea class='body'type="body" name="body" placeholder="body"></textarea><br>
            <input type="submit" class="submit"><a href="../" class="button">Go back</a>
        </div>
    </form>
</body>
</html>