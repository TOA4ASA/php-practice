<?php require '../functions.php';
$fileReq = false;
$calcReq = false;

$switchParlinedrome = htmlspecialchars($_GET['pd']) ?? null;
$switchDuplicates = htmlspecialchars($_GET['D']) ?? null;
$switchWordCount = htmlspecialchars($_GET['wc']) ?? null;
$switchCalc = htmlspecialchars($_GET['cal']) ?? null;
$val1 = htmlspecialchars($_GET['val1']) ?? null;
$val2 = htmlspecialchars($_GET['val2']) ?? null;
$text = htmlspecialchars($_GET['text']) ?? null;
$definend = $val1.$val2.$text;

if (empty($definend)){
    header("Location: ?method=&val1=temp&val2=temp&D=on&pd=on&wc=on&cal=on&text=temp");
    die();
}
$errors = [];


$filePath = [
    'duplicates/index.php' => isset($switchDuplicates),
    'palinedrome/index.php' => isset($switchParlinedrome),
    'strings_and_arrays/index.php' => isset($switchWordCount),
    'calc/index.php' => isset($switchCalc)
];
foreach ($filePath as $path => $condition) {
    if ($condition == 1) {
        if ($path == 'calc/index.php') {
            $calcReq = true;
        } else {
            $fileReq = true;
        }
    }
}
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
            <?php if ($calcReq == true) {
                require 'calc/index.php'; ?>

                <tbody><input id="val1" name=val1 type="text" value="<?= $val1 == 'temp' ? '' : $val1 ?>"></tbody><br>
                <tbody><input id="val2" name=val2 type='text' value="<?= $val2 == 'temp' ? '' : $val2 ?>"></tbody><br><br>
                <tbody><input type="submit"></tbody>

                <div>
                    <h3><?= $calResult ?? null ?></h3>
                </div>
            <?php } ?>
        </div>

        <div class="sidenavleft">

            <section class="margin">
                <h1>duplicates:</h1>
                <label class="switch">
                    <input type="checkbox" name=D <?php echo (isset($switchDuplicates)) ?  "checked=checked" : '' ?> />

                    <span class="slider round"></span>
                </label>
            </section>
            <section class="margin">
                <h1>parlinedrome:</h1>
                <label class="switch">
                    <input type="checkbox" name=pd <?php echo (isset($switchParlinedrome)) ?  "checked=checked" : '' ?> />
                    <span class="slider round"></span>
                </label>
            </section>
            <section class="margin">
                <h1>Word Count:</h1>
                <label class="switch">
                    <input type="checkbox" name=wc <?php echo (isset($switchWordCount)) ?  "checked=checked" : '' ?> />
                    <span class="slider round"></span>
                </label>
            </section>
            <section class="margin">
                <h1>calculator:</h1>
                <label class="switch">
                    <input type="checkbox" name=cal <?php echo (isset($switchCalc)) ?  "checked=checked" : '' ?> />
                    <span class="slider round"></span>
                </label>
            </section>
            <input type="submit" value="apply options">

        </div>
        <?php if ($fileReq == true) { ?>
            <div class="container">

                <textarea name="text" placeholder="enter your text here"></textarea><br>
                <input type="submit">

            </div>
        <?php } ?>
    </form>

    <div class=container>

        <?php
        foreach ($filePath as $path => $condition) {
            if ($condition == 1 && $path != 'calc/index.php') {
                require $path;
            }
        }
        ?>
    </div>

</html>