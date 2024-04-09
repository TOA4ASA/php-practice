<?php
$strip = $_GET['text'] ?? null;
$strip = trim($strip);
$strip = strtolower($strip);
$strip = preg_replace('/\s+/', '', $strip);
$text = preg_replace("#[[:punct:]]#", "", $strip);
$palidrome = strrev($text);
if(empty($text)){
    $palResult= '';
}
elseif ($text == $palidrome) {
    $palResult = 'This is a palindrome.';
} else {
    $palResult = 'This is not a palindrome.';
}
?>
<body>

</body>
    <h3><?= $palResult?></h3>
</html>