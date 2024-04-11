<?php
$fileReq = false;
function display($condition, $path, &$fileReq)
{

    if (!$condition == true) {
        return false;
    }
    if ($path == 'calculator') {
        $calcReq = true;
        view('calculator/calculator.php',[
            'calcReq' => $calcReq
        ]);
    } elseif (!$fileReq) {
        $fileReq = true;
        view('textfield/textfield.php',[
            'fileReq' => $fileReq
        ]);
    }
}
foreach ($require as $path => $condition) {
    display($condition, $path, $fileReq);
}
