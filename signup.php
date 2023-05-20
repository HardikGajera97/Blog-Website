<?php
include './db.php';

$err = "";
     
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
  

     if ($password == $repassword) {
            $auth = "SELECT * FROM `login` WHERE `email`='$email'";
            $result = mysqli_query($conn, $auth);
            $x = 1;
            while($fetch = mysqli_fetch_assoc($result)){
                if($fetch['email']==$email){
                    $x = 0;
                    header('location:log_in.html');
                }
             }
              if($x==1){
               $query = "INSERT INTO `login` (`email`, `password`) VALUES ('$email','$password')";
               mysqli_query($conn, $query);
               header('location:index.php');
             }
     }
     else{
        header('location:sign_up.html');
     }
?>