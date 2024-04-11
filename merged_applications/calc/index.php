<?php
// checking for errors
if (empty($val1)) {
    $errors['field1'] = ['please enter an value in the first field'];
} elseif (empty($val2)) {
    $errors['field2'] = ['please enter an value in the second field'];
} elseif (preg_match("/[a-z]/i", $val1) ?? preg_match("/[a-z]/i", $val2)) {
    $errors['char1'] = ["can't enter alfabet letters into the calculator"];
}
// if no errors then it calculates with given values and method
else {
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
                            <!-- determinants method -->
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