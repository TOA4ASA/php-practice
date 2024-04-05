<?php
require 'head.php';
const BASE_PATH = __DIR__ . '\\';

require BASE_PATH . '../functions.php';
$db = new mysqli('localhost', 'root', '', 'practice');
$sql = 'select * from notes';
$notes = $db->query($sql);

$titles = $db->query('select * from notes');

?>
<!-- 
Implement a web page where users can add tasks, mark tasks as completed, and delete tasks.
Users should be able to:
Add a new task with a title and a description.

* View a list of tasks with options to mark them as completed or delete them.

* Mark tasks as completed, which should visually differentiate them from incomplete tasks.

* Delete tasks from the list.

* Use PHP to handle the backend logic and MySQL to store tasks.

* Ensure proper error handling and validation (e.g., empty task titles should not be allowed).

* Implement basic styling for a better user experience (you can use CSS or a front-end framework like Bootstrap).

Hints:
Use HTML forms to handle user input for adding tasks and marking tasks as completed or deleted.
Utilize PHP to handle form submissions, interact with the MySQL database, and dynamically generate task lists.
Implement AJAX for smoother interactions, like marking tasks as completed without reloading the page.
Set up a MySQL database with a table to store tasks, including columns for task ID, title, description, and completion status. 
-->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<body>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($titles as $title) : ?>
            <a href="note?id=<?= $title['id'] ?>" class='hover:underline'>
                <li>
                    <?= $title['title'] ?>
                </li>

            </a>
        <?php endforeach ?>
        <a href="create">
            <button type='submit' class='hover:underline mp-6'>Create Note</button>
        </a>
    </div>
</body>

</html>

<?php
