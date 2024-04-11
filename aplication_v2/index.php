<link rel="stylesheet" href="style.css">
<?php
//requirements
const BASE_PATH = __DIR__ . '\\';
require 'logic/functions/read.php';
require 'base/basevars.php';
require 'logic/functions/views.php';

//toggle
?>
<form action="" method="get">
    <?php
    require 'logic/toggle/toggles.php';
    require 'logic/toggle/isset.php';
    require 'logic/toggle/require.php';
    require 'view/toggle/toggles.php';
    ?>
</form>