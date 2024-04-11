<?php
$strip = $_POST['text'] ?? '';
$strip = trim($strip);
$strip = strtolower($strip);
$strip = preg_replace('/\s+/', '', $strip);
$text = preg_replace("#[[:punct:]]#", "", $strip);
$palidrome = strrev($text);

if (empty($text)) {
    echo 'Please enter a string.';
} elseif ($text == $palidrome) {
    echo 'This is a palindrome.';
} else {
    echo 'This is not a palindrome.';
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
    <form method="post">
        <input type="text" name="text">
        <button type="submit">Check</button>
    </form>
</body>

</html>