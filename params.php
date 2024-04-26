<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Price</title>
</head>
<body>
    <h1>Candy Store</h1>
    <p>Mint: $<?php echo calcTotal(2, 5) ?> </p>
    <p>Toffee: $<?php echo calcTotal(4, 3) ?> </p>
    <p>Fudge: $<?php echo calcTotal(28, 56) ?> </p>
    
    <?php 
        function calcTotal($price, $qnty){
            $cost = $price * $qnty;
            $tax = $cost * (20 / 100);
            $total = $cost + $tax;
            echo $total;
        }
    ?>
</body>
</html>