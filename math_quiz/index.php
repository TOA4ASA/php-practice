<?php require 'quiz.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
</head>

<body>
    <div>
        <h1>
            <?php
            foreach ($quizQuestions as $question) {
                echo "question:$question[question]" . "<br>";

            ?>
                <form action="" name=form method="get">
                    <input id="userAwnsers" name=userAwnsers type="text"><br>
                    <input id="answers" name=answers type="hidden" value='<?= $question['awnser'] ?>'>
                </form>
            <?php  }; ?>
        </h1>
        <?php
        if (isset($_GET['userAwnsers'])) {
            if ($_GET['userAwnsers'] === $_GET['answers']) {
                echo "$_GET[userAwnsers] is correct, well done";
            } else {
                echo "$_GET[userAwnsers] is incorect the awnser is:$_GET[answers]";
            }
        }
        ?>
    </div>
</body>

</html>