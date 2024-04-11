<?php
// sets the text in the right format
$text = strtolower($text);
$exploded = explode(" ", $text);
 
if (!isset($text)) {
    $uniqueTexts = ['not found, make sure the text is not empty'];
} elseif ( $text == 'temp' ) {
    $uniqueTexts = [];
} else {
    $uniqueTexts = array_unique($exploded);
}

?>

<body>
    <h3>unique text is:</h3><br>
    <h4><?php foreach ($uniqueTexts as $item) {
            echo $item . ' ';
        } ?></h4>
</body>

</html>
<style>

</style>