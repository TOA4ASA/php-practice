<?php
// checking for errors
$calResult = 'no numbers found';
if ($val1 == 'temp' && $val2 == 'temp') {
    '';
} elseif (empty($val1)) {
    $errors['calc']['field1'] = 'please enter an value in the first field';
} elseif (empty($val2)) {
    $errors['calc']['field2'] = 'please enter an value in the second field';
} elseif (preg_match("/[a-z]/i", $val1)) {
    $errors['calc']['char1'] = "can't enter alfabet letters into the calculator";
    $val1 = '';
} elseif (preg_match("/[a-z]/i", $val2)) {
    $errors['char1'] = "can't enter alfabet letters into the calculator";
    $val2 = '';
}
// if no errors then it calculates with given values and method
else {
    intval($val1);
    intval($val2);
    $method = $_GET['method'] ?? '+';
    $calResult = check($method, $val1, $val2);
}
    view('calculator/calculator.php', [
        'calResult' => $calResult,
        'val1' => $val1,
        'val2' => $val2,
    ]);

