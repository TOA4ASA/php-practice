<?php

/*
Create a PHP script that generates a random math quiz for the user.
The quiz should consist of addition, subtraction, multiplication, or division questions with randomly generated operands.
 The user should be prompted to enter their answer for each question, and after completing the quiz, they should be given their score.
 */


function genquestion(){
    $operators = array('+','-','*','/');
    $operators = $operators[array_rand($operators)];
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);

    if($operators === '/' && $num2 === 0){
        $num2 =rand(1, 20);
    }
    if($operators === '*' && $num2 >= 20){
        $num2 =rand(1, 20);
    }

    $questtion = "$num1 $operators $num2";
    $awnser =  eval("return($questtion);");
    $awnser = round($awnser, 2);

    if ($awnser >= 1000){
        $num1=rand(1, 50);
        $num2=rand(1, 10);
    }

    return array("question"=> $questtion,"awnser"=> $awnser,);
}

$quizQuestions= array();

$quizQuestions[] = genquestion();

