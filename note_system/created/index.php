<?php
require '../head.php';
$db = new mysqli('localhost', 'root', '', 'practice');
$title = htmlspecialchars($_GET['title']);
$body = htmlspecialchars($_GET['body']);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!empty($title) && isset($body)) {
        $query = "insert into notes(title, body) values('$title', '$body')";
        $db->query($query);
    }
}
function checkTitle($title)
{
    $result = "";

    if (empty($title)) {
        $result = "error: please enter an title";
    } else {
        $result = "succesful in creating message";
    }
    return $result;
}
$msg = checkTitle($title)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>created</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class=centralise>
        <h1 class=error><?= $msg ?></h1>
        <a>
            <?php
            echo $title . "<br>";
            echo $body . "<br>";
            ?>
        </a>
        <a href="../" class="button">go back...</a>
    </div>
</body>

</html>