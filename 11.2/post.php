<?php
include('database.php');

$id = $_GET['id'];

$id = filter_var($id, FILTER_VALIDATE_INT);

if ($id == false || $id < 1) {
    die('Invalid input');
}

$post = getPost($id);

if ($post == null) {
    die('Not Found.');
}

?>

<html>
    <body>
            <h2>
              <?=$post->title ?>
            </h2>
            <p><?=$post->content ?></p>
    </body>
</html>