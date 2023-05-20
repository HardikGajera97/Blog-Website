<?php

include "./db.php";
$id = $_GET['srno'];
$sql = "select * FROM `blog` WHERE srno='$id'";
$result = mysqli_query($conn,$sql);

if (!$result) {
    die(mysqli_error($conn));  
}

$row = mysqli_fetch_assoc($result);

$title = $row['title']; 
$description = $row['description'];
$url = $row['imglink'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your blog</title>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="blog.css">

</head>

<body>
    <div class="container-fluid bgimage">
        <div class="container view">
            <div class="con-blogs card ">
                <div class="page">
                    <h2 class="p-heading">
                        <?php echo $title;?>
                    </h2>
                    <?php
                $auth = "SELECT * FROM `blog` WHERE srno='$id'";
                $result = mysqli_query($conn, $auth);

                while ($fetch = mysqli_fetch_assoc($result)){

            echo '<img class="fimg" src="'. $fetch['imglink'] . '" alt="Card image cap">';
                }
            ?>
                    <p class="para">
                        <?php echo $description;?>
                    </p>

                    <button type="button" onclick="Goback()">Back</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function Goback() {
            window.location.href = "website.php";
        }
    </script>
</body>

</html>