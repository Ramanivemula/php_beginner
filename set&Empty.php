<?php
    //isset() --> returns true if variable declared & not null
    //empty() --> returns true if variable is not declare, false, null & ""

    // $username = "Ramani";
    // $username = null;
    $username = False;


    if(isset($username)){
        echo"Variable is set<br>";
    }
    else{
        echo"Variable is not Set<br>";
    }

    if(empty($username)){
        echo"Variable is set<br>";
    }
    else{
        echo"Variable is not Set<br>";
    }
?>