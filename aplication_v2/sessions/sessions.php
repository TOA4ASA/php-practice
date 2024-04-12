<?php

$switchParlinedrome = $_GET['pd'] ?? null;
$switchParlinedrome = htmlspecialchars($switchParlinedrome);
$switchDuplicates = $_GET['d'] ?? null;
$switchDuplicates = htmlspecialchars($switchDuplicates);
$switchWordCount = $_GET['wc'] ?? null;
$switchWordCount = htmlspecialchars($switchWordCount);
$switchCalc = $_GET['cal'] ?? null;
$switchCalc = htmlspecialchars($switchCalc);
$val1 = $_GET['val1'] ?? null;
$val1 = htmlspecialchars($val1);
$val2 = $_GET['val2'] ?? null;
$val2 = htmlspecialchars($val2);
$text = $_GET['text'] ?? null;
$text = htmlspecialchars($text);