<?php
include './db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$auth = "SELECT * FROM `login` WHERE `email`='$email' and `password`='$password' ";
$result = mysqli_query($conn, $auth);

$x = 1;
while ($fetch = mysqli_fetch_assoc($result)) {
    if ($fetch['email'] == $email && $fetch['password'] == $password) {
        $x = 0;
    }
}

if ($x == 0) {
    header('location:website.php');
} 
else {
    $auth = "SELECT * FROM `login` WHERE `email`='$email'";
    $result = mysqli_query($conn, $auth);
    $y = 1;
    while ($fetch = mysqli_fetch_assoc($result)) {
        if ($fetch['email'] == $email) {
            echo "email is exist";
            header('location:log_in.html');
            $y=0;
        }
    }
    if($y==1){
        echo "<h3>Fill all detail</h3>";
        header('location:sign_up.html');
    }
}



?>

