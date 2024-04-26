<?php 
    $fun = findNum();
    echo $fun;
    function findNum(){
        $num1 = -2;
        $num2 = 2;
        if ($num2 < 0){
            echo "Negative Number";
        } else if ($num2 > 0){
            echo "Positve Number";
        } else {
            echo "Zero";
        }
    }
?>