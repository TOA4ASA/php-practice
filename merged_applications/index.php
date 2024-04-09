<?php require '../functions.php'; 
$switchParlinedrome = $_GET['pd'] ?? null;
$switchDuplicates = $_GET['D'] ?? null;
$switchWordCount = $_GET['wc'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>merged aplication</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="get">
        <div class="sidenavright">
            <?php require 'calc/index.php'; ?>

            <tbody><input id="val1" name=val1 type="text" value="<?= $_GET['val1'] ?? '' ?>"></tbody><br>
            <tbody><input id="val2" name=val2 type='text' value="<?= $_GET['val2'] ?? '' ?>"></tbody><br><br>
            <tbody><input type="submit"></tbody>

            <div>
                <h3><?= $calResult ?? '' ?></h3>
            </div>
        </div>

        <div class="sidenavleft">

            <section class="margin">
                <h1>duplicates:</h1>
                <label class="switch">
                    <input type="checkbox" name=pd <?php echo (isset($switchDuplicates))?  "checked=checked": '' ?>/>

                    <span class="slider round"></span>
                </label>
            </section>
            <section class="margin">
                <h1>parlinedrome:</h1>
                <label class="switch">
                    <input type="checkbox" name=wc <?php echo (isset($switchParlinedrome))?  "checked=checked": '' ?>/>
                    <span class="slider round"></span>
                </label>
            </section>
            <section class="margin">
                <h1>Word Count:</h1>
                <label class="switch">
                    <input type="checkbox" name=D <?php echo (isset($switchWordCount))?  "checked=checked": '' ?>/>
                    <span class="slider round"></span>
                </label>
            </section>
            <input type="submit" value="apply options">

        </div>

        <div class="container">

            <textarea name="text" placeholder="enter your text here"></textarea><br>
            <input type="submit">

        </div>
    </form>
</body>
<div class=container>

<?php

if (!empty($_GET['text'])) {
    //call for parlinedrome
}


if (!empty($switchDuplicates)) {
    require 'duplicates/index.php';
}

if (!empty($switchParlinedrome)) {
    require 'palinedrome/index.php';
}



if (!empty($switchWordCount)) {
    require 'strings_and_arrays/index.php';
}

?>
</div>
</html>