<?php
require '../head.php';
$db = new mysqli('localhost', 'root', '', 'practice');
$sql = 'select * from notes';
$notes = $db->query($sql);
$get = $_GET['id'];
$row = $db->execute_query("SELECT * FROM notes WHERE id=?", [$get]);
$note = $row->fetch_assoc();
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<body>
    <main>
        <div class='centralise'>

            </p>
            <p class='text note'><?= $note['title'] ?></p>
            <p class=text><?= $note['body'] ?></p>
            <p class='mt-6'>
                <a href="../" class="button">go back...</a>
            </p>

        </div>
    </main>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    handleform();
}

function handleform()
{
    global $db;
    global $id;
    $checkboxvalue = isset($_POST["checkbox"]) ? $_POST["checkbox"] : 0;
    if ($checkboxvalue == 'submit') {
        $query = "UPDATE `notes` SET `completed` = '1' WHERE `notes`.`id` = $id";
        $db->query($query);
    } else {
        $query = "UPDATE `notes` SET `completed` = '0' WHERE `notes`.`id` = $id";
        $db->query($query);
    }
}
