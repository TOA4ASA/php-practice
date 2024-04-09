<?php
$strip = $text;
$strip = trim($strip);
$strip = strtolower($strip);
$strip = preg_replace('/\s+/', '', $strip);
$texts = preg_replace("#[[:punct:]]#", "", $strip);
$palidrome = strrev($texts);
if(empty($texts)){
    $palResult= '';
}
elseif ($texts == $palidrome) {
    $palResult = 'This is a palindrome.';
} else {
    $palResult = 'This is not a palindrome.';
}
?>
<body>

</body>
    <h3><?= $palResult?></h3>
</html>