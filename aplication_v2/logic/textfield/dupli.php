<?php
// sets the text in the right format
$text = trim($text);
$text = strtolower($text);
$exploded = explode(" ", $text);
 
if (!isset($text)) {
    $uniqueTexts = ['not found, make sure the text is not empty'];
} elseif ( $text == 'temp' ) {
    $uniqueTexts = [];
} else {
    $uniqueTexts = array_unique($exploded);
}

view('textfield/dupli.php',[
    'uniqueTexts' => $uniqueTexts,
]);