<h1>single post</h1>

<?php
include 'load.php';

$id = $_GET['id'];
$qry = "SELECT * FROM 2685_php_posts.pst_posts WHERE id = '$id';";
$res = $db ->query($qry);
dd($res , false);