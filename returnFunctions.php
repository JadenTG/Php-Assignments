<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Functions</title>
    <?php 
        $returnImg = headLogo();
        echo $returnImg;

        function headLogo(){
            return  "<img src='download.png'>";
        }
    ?>
</head>
<body>
    <?php 
        $returnCopy = copyright();
        echo $returnCopy;

        function copyright(){
            $y = '2024';
            $c = 'Copyright';
            return "$c  $y";
        }
    ?>
</body>
</html>