<?php
//temp is to resolve the startup undifined error
if ($text == 'temp') {
    unset($text);
    $text = '';
}

// a bunch of formatting to display and use the correct data

// seperates each word into its own array
$exploded = explode(" ", $text);

// count the total number of words.
$num_words = str_word_count($text);
$countResult = $num_words;

// find the longest word in the text.
$maxLen = max(array_map('strlen', $exploded));
$maxLenResult = $maxLen;

// determine the average word length.
$text_no_spaces = preg_replace('/\s/u', '', $text);
$num_char = strlen($text_no_spaces);

if ($num_words == 0 ?? $num_char == 0) {
    $errors['div'] = 'please enter something in the textarea';
} else {
    $avr_char = $num_char / $num_words;
    $avrCharResult = round($avr_char, 1);
}
// identify the most frequent words and their counts.
function array_most_common($array)
{
    $counted = array_count_values($array);
    arsort($counted);
    $top_five = array_slice($counted, 0, 5);
    return $top_five;
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