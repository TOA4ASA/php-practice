<link rel="stylesheet" href="styles/style.css">
<?php
//requirements
const BASE_PATH = __DIR__ . '\\';
require 'logic/functions/base.php';
require 'sessions/sessions.php';

?>
<form action="" method="get">
    <?php
    require 'logic/toggle/isset.php';
    require 'logic/toggle/require.php';
    require 'view/toggle/toggles.php';
    ?>
</form>