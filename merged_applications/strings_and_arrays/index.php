<?php
if ($text == 'temp') {
    unset($text);
    $text = '';
}
$exploded = explode(" ", $text);

//Count the total number of words.
$num_words = str_word_count($text);
$countResult = $num_words;

//Find the longest word in the text.
$maxLen = max(array_map('strlen', $exploded));
$maxLenResult = $maxLen;

//Determine the average word length.
$text_no_spaces = preg_replace('/\s/u', '', $text);
$num_char = strlen($text_no_spaces);
// echo "total amount of characters ".$num_char."<br>";

if ($num_words == 0 ?? $num_char == 0) {
    $errors = 'can\'t devide trough 0';
} else {
    $avr_char = $num_char / $num_words;
    $avrCharResult = round($avr_char, 1);
}
//Identify the most frequent word(s) and their count(s).
function array_most_common($array)
{
    $counted = array_count_values($array);
    arsort($counted);
    $top_five = array_slice($counted, 0, 5);
    return ($top_five);
}
$mostCommon = array_most_common($exploded);
?>

<body>

    <h3>number of words: <?= $countResult ?></h3>
    <h3>longest word is: <?= $maxLenResult ?> characters</h3>
    <h3>number of words: <?= $avrCharResult ?? 0 ?></h3>

    <br>

    <div class="container">
        <table class=wordCount>
            <tr>
                <th>Word</th>
                <th>Count</th>
            </tr>
            <?php foreach ($mostCommon as $item => $count) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($item); ?></td>
                    <td><?php echo $count; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>