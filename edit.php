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

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];
    $sql = "UPDATE `blog` SET title='$title', description='$description', imglink='$url' WHERE srno='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:website.php');
    } else {
        die(mysqli_error($conn)); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="blog.css">
</head>

<body>


    <div class="container-fluid bgimage p-5">
        <div class="container con-blog card">
            <h2>Upadate your blog</h2>
            <form class="blog-form" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Upadate your blog title: </label>
                    <input type="text" class="form-control" name="title" autocomplete="off"
                        value=" <?php echo $title;?>">
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">Upadate your image url: </label>
                    <input type="text" class="form-control" name="url" autocomplete="off" value="<?php echo $url;?>">
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label">Upadate your blog description: </label>
                    <textarea class="form-control" cols="30" rows="10" name="description" id="description" autocomplete="off" ><?php echo $description;?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>
</html>