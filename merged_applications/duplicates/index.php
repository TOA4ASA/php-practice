<?php
$array = array();
$texts = $_GET['text'] ?? null;
$texts = strtolower($texts);
$exploded = explode(" ", $texts);
// dd($exploded);
if (!isset($texts)) {
    $uniqueTexts = ['not found, make sure the text is not empty'];
} elseif ( $texts == 'temp' ) {
    $uniqueTexts = [];
} 
else {
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