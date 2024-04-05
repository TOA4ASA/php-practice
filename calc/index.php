<!-- Exercise:
Write a PHP script that takes two numbers as input and then calculates and displays the sum, difference, product, and quotient of those two numbers. -->
<?php

require '../functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
</head>

<body>
    <div class="centralise">
        <h1>
            <label for="method">calculator</label><br>
            <form action="" name=form method="get">
                <select name="method" id="method">
                    <option value="+" <?php selected('+') ?>>sum | +</option>
                    <option value="-" <?php selected('-') ?>>difference | -</option>
                    <option value="*" <?php selected('*') ?>>product | *</option>
                    <option value="/" <?php selected('/') ?>>quotient | /</option>
                </select>
                <script type="text/javascript">
                    document.getElementById('method').value = "<?php echo $_GET['method']; ?>";
                </script>
                <br>

                <input id="val1" name=val1 type="text" value="<?= $_GET['val1'] ?? '' ?>"><br>
                <input id="val2" name=val2 type='text' value="<?= $_GET['val2'] ?? '' ?>"><br>
                <input type="submit">
            </form>

        </h1>
    </div>
</body>

</html>
<style>
    .centralise {
        text-align: center
    }

    .bold {
        font-weight: bold;
    }
</style>

<?php


$val1 = $_GET['val1'];
$val2 = $_GET['val2'];
$errors = [];

if (empty($val1)) {
    $errors['field1'] = ['please enter an value in the first field'];
}
if (empty($val2)) {
    $errors['field2'] = ['please enter an value in the second field'];
}

if (preg_match("/[a-z]/i", $val1)) {
    $errors['char1'] = ["can't enter alfabet letters into the calculator"];
} elseif (preg_match("/[a-z]/i", $val2)) {
    $errors['char1'] = ["can't enter alfabet letters into the calculator"];
} else {
    intval($val1);
    intval($val2);
}

errorHandeling($errors);

$method = $_GET['method'];
$result = check($method, $val1, $val2);


echo "<div class='centralise'><h2> result: $result</h2></div>";