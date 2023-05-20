<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'db.php';?>
    <nav class="navbar navbar-expand-md bg-light" id="Nav">
        <div class="container nav">

            <a class="navbar-brand logo" href="#Home">Blogger</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#Contact">Contact</a>
                    </li>
                </ul>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    <a href="log_in.html" class="btn bcolor btn-primary">Log in </a>
                    <a href="sign_up.html" class="btn me-md-2 btn-primary">Sign Up</a>

                </div>
            </div>
        </div>
    </nav>

    <div id="Home" class="home">
        <p class="quote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur reiciendis animi fuga
            ullam, neque quae quidem. Quasi aut similique repellendus, repellat dolore harum cum, blanditiis ea,
            hicoptio dolores eveniet.</p>
        <a href="#Blog" class="btn btnex btn-primary">Explore it </a>
    </div>

    <div class="blog container" id="Blog">
        <h2>Our Blogs</h2>
        <div class="row r1">
            <?php
            include './db.php';

            $auth = "SELECT * FROM `blog`";
            $result = mysqli_query($conn, $auth);

            $max_length = 150;
            while ($fetch = mysqli_fetch_assoc($result)) {

            echo '
            <div class="col-md-4" id="card-p">
                <div class="card m-3">
                    <img class="card-img-top " src="'. $fetch['imglink'] . '" alt="Card image cap" width="200" height="300">
                    <div class="card-body">
            
                        <h5 class="card-title text-dark " style="font-weight: bold;">' . $fetch['title'] . '</h5> 
                        <details> <summary>More details</summary> </a><p class="card-text">' . $fetch['description'] . '</p></details>
            
                    </div>
                </div>
            </div>
            ';
            }
            ?>
        </div>
    </div>


    <div id="About" class="about container">
        <h2>About Us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis officia commodi sit obcaecati
            molestiae delectus dolores eum deserunt omnis accusamus esse eaque fugiat nostrum aperiam odit tempora,
            molestias corporis, nemo hic aliquid nisi non facilis rem repellat. Mollitia accusantium nisi dolor dolore
            ratione soluta recusandae nulla omnis quis. Eos natus neque deleniti? Nisi repellendus beatae ea aspernatur
            porro! Modi perspiciatis dicta obcaecati, doloremque dolores similique aliquid illum inventore cum voluptate

        </p>
    </div>

    <div class="container-fluid" id="Contact">

        <div class="container contact">
            <form action="contact.php" method="post">
                <div class="formcs">
                    <h2 class="con"> Contact Us</h2>
                    <label for="name">Name:</label>
                    <input type="text" id="Name" name="name" class="name" placeholder="Enter your name">

                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="Email" class="email" placeholder="Enter your email">

                    <label for="desc">Description:</label>
                    <textarea name="desc" id="Desc" cols="30" rows="10" placeholder="Enter text"></textarea>
                    <button class="btnsb" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="copy">

    </div>
</body>

</html>