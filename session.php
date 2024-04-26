<?php 
    session_start();
    $counter = $_SESSION['counter'] ?? 0;
    $counter = $counter + 1;
    $_SESSION['counter'] = $counter;

    $message = 'Page Views: ' . $counter;
?>

<h1> Welcome </h1>
<p><?= $message ?></p>
<p><a href="cookies.php">Refresh this page</a> to see the page views increase.</p>