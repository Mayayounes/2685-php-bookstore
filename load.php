<?php

function dd($item , $die){
    echo '<pre>';
    var_dump($item);

    if($die = true){
        die();
    }
}

$db = new mysqli('localhost' , 'root' , '', `2685_php_posts`);
