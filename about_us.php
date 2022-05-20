<?php
    $count = "SELECT * FROM robots";
    $count_qurey = mysqli_query($connect,$count);

    $countRobots = mysqli_num_rows($count_qurey);
?>

<section class="about-us">
    <div id="about-us">
        <h2 id="about-us-h2">ABOUT US</h2>
        <p id="about-us-p">
            The companies mention in this website are those innovative companies that are spreading there
            ideas and innovation in this world. They are designing and creating robots with human-like 
            intelligence and making progress in robotics field.
            And this website have about <?php echo $countRobots?> robots info which are designed by these companies.
        </p>
    </div>

    <img src="./images/logo.png" id="image">
</section>