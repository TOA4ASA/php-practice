<?php
$array = array();
$texts = $_POST['text'] ?? '';
$texts = strtolower($texts);
$exploded = explode(" ", $texts);
if (empty($exploded)) {
    $uniqueTexts = ['not found, make sure the text is not empty'];
} else {
    $uniqueTexts = array_unique($exploded);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method=post>
        <input type="text" class=body name=text><br>
        <input type="submit"><br>

        <h1>unique text is: <br> <?php foreach ($uniqueTexts as $item) {
            echo $item. ' ';
        }; ?></h1>
    </form>
</body>

</html>
<style>
    .bold {
        font-weight: bold;
        font-size: x-large;
    }

    .body {
        padding: 10px;
        margin: 25px;
        width: 20%;
        height: 30%;
        text-align: start;
    }
</style>