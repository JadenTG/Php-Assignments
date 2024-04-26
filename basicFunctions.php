<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Functions</title>
    <?php
        $header = write_logo();
        echo $header;

        function write_logo(){
            $img = "<img src='./download.png'>";
            echo $img;
        }
    ?>
</head>
<body>
    
<?php
    $footer = write_footer();
    echo $footer;

    function write_footer(){
    $copy = 'Copyright 2024';
    echo $copy;
    }
?>
</body>
</html>
