<?php
include './db.php';

    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $url = $_POST['url'];

    $sql = "INSERT INTO blog (`title`,`description`,`imglink`)VALUES ('$title', '$desc','$url')";
    $result = mysqli_query($conn, $sql);

        if ($result) {
            header('location:website.php');
        } else {
            die(mysqli_error($conn)); 
        }
 
?>