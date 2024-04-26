<?php 
    $names = array("john", "adam", "jack", "dude");

    function capitalize($str){
        return ucwords($str);
    }

    for($i=0; $i < count($names); $i++){
        capitalize($names[$i]);
        echo "$names[$i] <br>";
    }
?>