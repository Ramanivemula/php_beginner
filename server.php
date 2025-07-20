<?php
    //SGB that contains headers,paths,& script location.
    //the entries in this array were created by web server.
    //shows nearly everything you need to know about the current web page env.

    foreach($_SERVER as $key => $value){
        echo"{$key}={$value}<br>    ";
    }
?>