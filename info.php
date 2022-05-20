<?php
    include_once './Connection.php';

    $id = $_GET['page'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Icon -->
        <link rel="icon" type="jpg" href="images/Icon.jpg">
        
        <!-- Title -->
        <title>AI World</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/info.css">
        <link rel="stylesheet" href="./css/footer.css">

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">

        <!-- Flickity -->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        <!-- Sweet Alert 2 -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <section>
            <header id="header">
                <nav>
                    <a href="./index.php">
                        <div class="nav-logo">
                            <img src="images/logo.png" alt="Website logo" id="logo">
                        </div>
                    </a>

                    <div class="nav-list">
                        <label id="icon">
                            <i class="fas fa-bars"></i>
                        </label>
                        
                        <ul>
                            <li><a href="./index.php?#company">Companies</a></li>
                            <li><a href="./index.php?#robots">Robots</a></li>
                            <li><a href="./index.php?#about-us">About Us</a></li>
                            <li><a href="./index.php?#contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </section>

        <section class="info">
            <?php
                $search = "SELECT * FROM robots where robotsID = $id";
                $search_qurey = mysqli_query($connect,$search);

                if($search_qurey == true){
                    while($myData = mysqli_fetch_array($search_qurey)){   ?>

                        <div>
                            <img src="<?php echo $myData['src']?>" alt="<?php echo $myData['alt']?>" id="info-image">
                        </div>

                        <div id="info-content">
                            <h2><?php echo $myData['name']?></h2>
                            <?php echo $myData['description']?>
                        </div>

                        <div id="info-video">
                            <iframe id="video" src="<?php echo $myData['video']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br><br><br>
                        </div>
            <?php }}?>
        </section>

    </body>
    

<?php
    include_once('./footer.php');
?>