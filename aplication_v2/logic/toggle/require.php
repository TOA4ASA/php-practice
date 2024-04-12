<?php
$fileReq = false;
$calReq = false;
function display($condition, $path, &$fileReq, $val1, $val2, $text)
{

    if (!$condition == false) {
        return false;
    }
    if ($path == 'calculator') {
        $calReq = true;
        logic('calculator/calc.php', [
            'calReq' => $calReq,
            'val1' => $val1,
            'val2' => $val2,
        ]);
    } elseif (!$fileReq) {
        $fileReq = true;
        view('textfield/textfield.php', [
            'fileReq' => $fileReq
        ]);
        logic($path, [
            'text' => $text
        ]);
    }  else {
        logic($path, [
            'text' => $text
        ]);
    }
}
foreach ($require as $path => $condition) {
    display($condition, $path, $fileReq, $val1, $val2, $text);
}
function selected($method)
{
    if (isset($_GET['method']) && $_GET['method'] == $method) echo 'selected="selected"';
}
