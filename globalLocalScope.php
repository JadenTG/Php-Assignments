<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global & Local Scope</title>
    <link rel="stylesheet" href="style.css" />
    <?php 
        $tax = 20;
        function calcTotal($price, $qnty){
            $cost = $price * $qnty;
            $tax = $cost * (20 / 100);
            $total = $cost + $tax;
            return $total;
        }
    ?>
</head>
<body>
    <h1>The Candy Store</h1>
    <div class="table">
    <p>Item & Price</p>
    <p>Mint: $<?php echo calcTotal(2, 5) ?> </p>
    <p>Toffee: $<?php echo calcTotal(4, 3) ?> </p>
    <p>Fudge: $<?php echo calcTotal(28, 56) ?> </p>
    <p>Tax: <?php echo $tax ?>%</p>
    </div>

</body>
</html>