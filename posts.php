<?php

include 'load.php';

$qry = 'SELECT * FROM 2685_php_posts.pst_posts;';

$res = $db -> query($qry);

$posts = mysqli_fetch_all($res , MYSQLI_ASSOC);
foreach($posts as $post){
    include 'components/post.php';
}