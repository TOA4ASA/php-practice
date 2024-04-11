<?php
if ($calcReq == true) {
?>


        <tbody><input id="val1" name=val1 type="text" value="<?= $val1 == 'temp' ? '' : $val1 ?>"></tbody><br>
        <tbody><input id="val2" name=val2 type='text' value="<?= $val2 == 'temp' ? '' : $val2 ?>"></tbody><br><br>
        <tbody><input type="submit"></tbody>

        <div>
            <h3><?= $calResult ?? null ?></h3>
        </div>

<?php } ?>