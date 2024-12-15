<?php

include 'load.php';

$qry = 'SELECT * FROM 2685_php_posts.pst_users;';

$res = $db -> query($qry);

$users = mysqli_fetch_all($res , MYSQLI_ASSOC);

foreach($users as $user){
    include 'components/user.php';
}