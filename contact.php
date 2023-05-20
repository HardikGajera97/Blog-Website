<?php
include './db.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $desc = $_POST["desc"];

    $sql = "INSERT INTO contact (`name`,`email`,`description`)VALUES ('$name', '$email','$desc')";
    $result = mysqli_query($conn, $sql);

        if ($result) {
            header('location:index.php');
        } else {
            die(mysqli_error($conn)); 
        }
 
?>