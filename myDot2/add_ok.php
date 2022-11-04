<?php
    $n = $_POST['name'];
    $e = $_POST['email'];
    $a = $_POST['add'];
    $p = $_POST['phone'];
    $b = $_POST['birthday'];
    $g = $_POST['gender'];

    echo "<b>Information about New Friend</b><br><br>";
    echo "• Name: ";
    echo $n."<br/>" ;
    echo "• Email: ";
    echo $e."<br/>" ;
    echo "• Address: ";
    echo $a."<br/>" ;
    echo "• Phone number: ";
    echo $p."<br/>" ;
    echo "• Birthday: ";
    echo $b."<br/>" ;
    echo "• Gender: ";
    echo $g."<br/>" ;
?>
