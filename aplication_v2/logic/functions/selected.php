<?php
function check($method, $val1, $val2)
{
    if (empty($val1) ?? empty($val2))
        $result = 'please make sure u filled in every field';
    else {
        switch ($method) {
            case $method === '/':
                if ($val2 === 0) {
                    $result =  'can\'t divide trough 0';
                } else {
                    $result = $val1 / $val2;
                }
                break;
            case $method === '+':
                $result = $val1 + $val2;
                break;
            case $method === '-':
                $result = $val1 - $val2;
                break;
            case $method === '*':
                $result = $val1 * $val2;
                break;
            default:
                $result = 'Invalid method';
                break;
        }}
    return $result;
}