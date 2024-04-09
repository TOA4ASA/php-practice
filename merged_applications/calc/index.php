<?php
if (empty($val1)) {
    $errors['field1'] = ['please enter an value in the first field'];
}
if (empty($val2)) {
    $errors['field2'] = ['please enter an value in the second field'];
}

if ($val1 === 'not set' ?? $val2 === 'not set') {
} elseif (preg_match("/[a-z]/i", $val1) ?? preg_match("/[a-z]/i", $val2)) {
    $errors['char1'] = ["can't enter alfabet letters into the calculator"];
} else {
    intval($val1);
    intval($val2);
    $method = $_GET['method'] ?? '+';
    $calResult = check($method, $val1, $val2);
    $calResult;
}
?>

<body>
    <table>
        <h1>

            <label for="method">calculator</label><br>
            <form action="" name=form method="get">
                <tbody>

                    <div class=background>
                        <select name="method" id="method">
                            <option value="+" <?php selected('+') ?>>sum | +</option>
                            <option value="-" <?php selected('-') ?>>difference | -</option>
                            <option value="*" <?php selected('*') ?>>product | *</option>
                            <option value="/" <?php selected('/') ?>>quotient | /</option>
                        </select>

                        <script type="text/javascript">
                            document.getElementById('method').value = "<?php echo $_GET['method'] ?? '+'; ?>";
                        </script>
                    </div>
                    
                </tbody>
                <br><br>
            </form>

        </h1>
    </table>

</body>

</html>
<style>

</style>