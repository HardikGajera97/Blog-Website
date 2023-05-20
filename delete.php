<?php
include "./db.php";
   $id = $_GET['srno'];
   $delete = "DELETE FROM `blog` WHERE `srno`='$id'";
   $result = mysqli_query($conn,$delete);
   header("location: ./website.php");
?>