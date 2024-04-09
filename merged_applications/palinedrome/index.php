<?php
$strip = $_GET['text'] ?? '';
$strip = trim($strip);
$strip = strtolower($strip);
$strip = preg_replace('/\s+/', '', $strip);
$text = preg_replace("#[[:punct:]]#", "", $strip);
$palidrome = strrev($text);

if ($text == $palidrome) {
    $palResult = 'This is a palindrome.';
} else {
    $palResult = 'This is not a palindrome.';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>

<body>

</body>
    <h3><?= $palResult?></h3>
</html>