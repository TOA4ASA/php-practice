<?php
// Read the content of the text file
$txt = file_get_contents("text.txt");

// Check if the file was read successfully
if ($txt === false) {
    die("Error: Unable to read the file.");
}

// Convert the text to lowercase and split it into words
$lowercasewords = strtolower($txt);
$words = explode(" ", $lowercasewords);

// Function to find the most common words
function array_most_common($array)
{
    // Count the occurrences of each word
    $counted = array_count_values($array);
    
    // Sort the array by values in descending order
    arsort($counted);
    
    // Get the top 5 most common words
    $top_five = array_slice($counted, 0, 5);
    
    return $top_five;
}

// Get the top 5 most common words
$mostCommon = array_most_common($words);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Most Common Words</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Word</th>
            <th>Count</th>
        </tr>
        <?php foreach ($mostCommon as $word => $count) : ?>
            <tr>
                <td><?php echo htmlspecialchars($word); ?></td>
                <td><?php echo $count; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
