<?php

    $name="user";
    $value="aziz";
    setcookie($name, $value, time()+20);
    
    if(isset($_COOKIE['user'])){
        echo "saved cookie={$_COOKIE['user']}";
    }else {
        echo "cookie is not set";
    }
?>
<!-- 
    cookie rules--
    setcookie(name,value,time())    
->

