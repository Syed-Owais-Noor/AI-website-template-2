<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Icon -->
        <link rel="icon" type="jpg" href="images/Icon.jpg">
        
        <!-- Title -->
        <title>AI World-Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/login.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">

        <!-- Sweet Alert 2 -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <section class="particles-js" id="particles-js"></section>

        <section class="login">
            <form method="POST" id="login-form">
                <h3 id="form-h3">WELCOME TO AI-WORLD</h3>
                
                <div id="inputBox">
                    <input type="text" name="userEmail" required>
                    <label>EMAIL</label>
                </div>
                <div id="inputBox">
                    <input type="password" name="userPassword" required>
                    <label>PASSWORD</label>
                </div>

                <button class="button" name="login_btn"><span>Login </span></button>
            </form>
        </section>

        <!-- Script -->
        <script src="./js/particles.min.js"></script>
        <script src="./js/app.js"></script>

        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href);
            }
        </script>
    </body>
</html>

<?php
    include_once('Connection.php');

    session_start();

    if (isset($_POST['login_btn'])) {
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];

        // Function call
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $select = $connect->prepare("select * from users where userEmail = '$email' AND userPassword = '$password'");
            $select->execute();
            $result = $select->get_result();
            $row = $result->fetch_assoc();

            if ($row['userEmail'] == $email && $row['userPassword'] == $password)
            {
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['userEmail'] = $row['userEmail'];
                $_SESSION['userPassword'] = $row['userPassword'];

                echo "<script> Swal.fire('LOGIN SUCCESSFULL', 'You are welcome to AI World-inbox!', 'success'); </script>";

                header('refresh:2; inbox.php');
            }
            else
            {
                echo "<script> Swal.fire('LOGIN FAILED', 'Your email or password is wrong!', 'error'); </script>";

                header('refresh:1; index.php');
            }
        }
        else {
            echo "<script> Swal.fire('LOGIN FAILED', 'Your email format is wrong!', 'error'); </script>";
        }
    }
?>