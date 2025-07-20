<?php
    $food = array("pizza","burger","pastry","sandwich","chocolates");
    echo $food[1] . "<br>";

    // $food[0] = "pizzas";
    // array_push($food, "milkshake","momos");// add the items to the last index
    // array_pop($food);//Remove the last element 
    // array_shift($food);
    $reversed = array_reverse($food);


    foreach($reversed as $reverse){
        echo"{$reverse} <br>";
    }

    echo count($food) . "<br>";
    foreach($food as $item){
        echo"{$item} <br>";
    };


    //Associative Array: an array made of key value pairs
    //Countries --> capitals
    //id --> username
    //item --> price

    $capitals = array("USA"=>"Washington D.C",
                "Japan"=>"Kyoto",
                "South Korea"=>"Seoul",
                "India"=>"Delhi");
    //we also can do the same operations that we did for the array
    //If we want to print only keys or values if we want
    $keys = array_keys($capitals);
    $value = array_values($capitals);
    foreach ($keys as $key) {
        echo "{$key} <br>";
    }

    foreach($capitals as $key=>$value){
        echo"{$key} = {$value} <br>";
    }

    //We can use the flip also here
    $flip = array_flip($capitals);
    foreach($flip as $key=>$value){
        echo"{$key} = {$value} <br>";
    }
?>

