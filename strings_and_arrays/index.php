<?php
require '../test_text.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    #text {
        height: 50%;
        width: 70%;
        position: fixed;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body>
    <form action="" name=form method="get">
        <input id="text" name=text type="text"><br>
    </form>
</body>

</html>

<?php

$text = htmlspecialchars($_GET['text'] ?? '');
$exploded = explode(" ", $text);

//Count the total number of words.
$num_words = str_word_count($text);
echo "<p>number of words: " . $num_words . "<p><br>";

//Find the longest word in the text.
$maxlen = max(array_map('strlen', $exploded));
echo "<p>longest word is " . $maxlen . " characters" . "</p><br>";

//Determine the average word length.
$text_no_spaces = preg_replace('/\s/u', '', $text);
$num_char = strlen($text_no_spaces);
// echo "total amount of characters ".$num_char."<br>";

if ($num_words == 0 ?? $num_char == 0) {
    echo '<p>can\'t devide trough 0 </p><br>';
} else {
    $avr_char = $num_char / $num_words;
    echo "<p>average amount of characters is:" . round($avr_char, 1) . "</p><br>";
}
//Identify the most frequent word(s) and their count(s).
function array_most_common($array)
{
    $counted = array_count_values($array);
    arsort($counted);
    $top_ten = array_slice($counted, 0, 5);
    return ($top_ten);
}
$mostCommon = array_most_common($exploded);
?>
<table>
    <tr>
        <th>Item</th>
        <th>Count</th>
    </tr>
    <?php
    foreach ($mostCommon as $item => $count) {
        echo "<tr><td>$item</td><td>$count</td></tr>";
    }
    ?>
</table>