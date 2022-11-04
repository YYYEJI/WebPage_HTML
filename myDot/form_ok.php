<?php
    $name= $_POST['name'];
    $age = $_POST['age'];
    $major = $_POST['major'];
    $rc = $_POST['rc'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];
    $region = $_POST['region'];
    $p1 = $_POST['programing1'];
    $p2 = $_POST['programing2'];
    $p3 = $_POST['programing3'];
    $r1 = $_POST['region'];
    $g1 = $_POST['gender'];
    $b1 = $_POST['birthday'];

    echo "Name: ";
    echo $name."<br/>" ;
    echo "Age: ";
    echo $age."<br/>";
    echo "Major: ";
        echo $major."<br/>" ;
    echo "RC: ";
        echo $rc."<br/>" ;
    echo "Phone number: ";
        echo $phone."<br/>" ;
    echo "Content: ";
    echo $content."<br/>";
    echo "Programming language: ";
    echo $p1."<br>";
    echo $p2."<br>";
    echo $p3."<br/>";
    echo "Region: ";
    echo $r1."<br/>";
    echo "Gender: ";
    echo $g1."<br/>";
    echo "Birthday: ";
    echo $b1."<br/>";
?>
