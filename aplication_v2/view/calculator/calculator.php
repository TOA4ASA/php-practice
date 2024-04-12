<?php
?>
<html>

<body>
    <div class=sidenavright>
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


        <tbody><input id="val1" name=val1 type="text" value="<?= $val1 == 'temp' ? '' : $val1 ?>"></tbody><br>
        <tbody><input id="val2" name=val2 type='text' value="<?= $val2 == 'temp' ? '' : $val2 ?>"></tbody><br><br>
        <tbody><input type="submit"></tbody>

        <div>
            <h3><?= $calResult ?? null ?></h3>
        </div>
    </div>
</body>

</html>