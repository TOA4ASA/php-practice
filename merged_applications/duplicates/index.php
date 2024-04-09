<?php
$array = array();
$texts = $_GET['text'] ?? null;
$texts = strtolower($texts);
$exploded = explode(" ", $texts);
// dd($exploded);
if (!isset($texts)) {
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
        <h3>unique text is:</h3><br>
        <h4><?php foreach ($uniqueTexts as $item) {
                echo $item . ' ';
            } ?></h4>
</body>

</html>
<style>

</style>