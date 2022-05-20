<?php
    include_once('Connection.php');

    session_start();

    if ($_SESSION['userEmail'] == "")
    {
        header('location:index.php');
    }
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
        <title>AI World-inbox</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/inbox.css">

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

        <!--Data table-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>

        <!-- Sweet Alert 2 -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <section>
            <header id="header">
                <nav>
                    <div class="nav-logo">
                        <img src="images/logo.png" alt="Website logo" id="logo">
                    </div>
    
                    <div class="nav-list">
                        <ul>
                            <li><a href="./logout.php">Log-Out</a></li>
                            <li>
                                <label id="icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                </label>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </section>

        <section id="particles-js"></section>

        <section class="table">
            <h2 id="table-h2">AI World-inbox</h2>

            <form method="POST">
                <table id="table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                            $searchBtn = "SELECT * FROM inbox order by inboxID";
                            $search_qurey = mysqli_query($connect,$searchBtn);

                            if($search_qurey == true){
                                while($myData = mysqli_fetch_array($search_qurey)){   ?>
                                    <tr>
                                            <td><?php echo $myData['full_name']?></td>
                                            <td><?php echo $myData['email']?></td>
                                            <td><?php echo $myData['message']?></td>
                                            <td><button type="submit" value="<?php echo $myData['inboxID']?>" name="delete-btn"><i class="fas fa-trash"></i></button></td>
                                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </form>
        </section>

        <!-- Script -->
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                    "value": 355,
                    "density": {
                        "enable": true,
                        "value_area": 789.1476416322727
                    }
                    },
                    "color": {
                    "value": "#ffffff"
                    },
                    "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                    },
                    "opacity": {
                    "value": 0.48927153781200905,
                    "random": false,
                    "anim": {
                        "enable": true,
                        "speed": 0.2,
                        "opacity_min": 0,
                        "sync": false
                    }
                    },
                    "size": {
                    "value": 2,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0,
                        "sync": false
                    }
                    },
                    "line_linked": {
                    "enable": false,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                    },
                    "move": {
                    "enable": true,
                    "speed": 0.2,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                    },
                    "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                        "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 83.91608391608392,
                        "size": 1,
                        "duration": 3,
                        "opacity": 1,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                    }
                },
                "retina_detect": true
            });
        </script>

        <script>
            $(document).ready( function () {
                $('#table').DataTable({
                    scrollY: 250,
                });
            } );
        </script>

        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href);
            }
        </script>
    </body>
</html>

<?php
    if (isset($_POST['delete-btn']))
    {
        $delete = $connect->prepare("delete from inbox where inboxID=".$_POST['delete-btn']);

        if ($delete->execute())
        {
            echo "<script> Swal.fire('DELETED SUCCESSFULLY', 'You data has been removed successfully from the database!', 'success'); </script>";
        }
        else
        {
            echo "<script> Swal.fire('DELETION FAILED', 'Your data has not been removed from the database!', 'error'); </script>";
        }
    }
?>