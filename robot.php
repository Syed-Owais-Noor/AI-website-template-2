<section class="robots">
    <div id="robots">
        <h2 id="robots-h2">IMPORTANCE OF ROBOTICS</h2>
        <p id="robots-p">
            Robotics technology influences every aspect of work and home. 
            Robotics has the <strong>potential to positively transform lives and work practices</strong> , 
            raise efficiency and safety levels and provide enhanced levels of service. Therfore we can
            say in present era robots play a particularly valuable role in our life.
        </p>
    </div>

    <div class="robots-carousel" data-flickity='{ "groupCells": true, "autoPlay": true, "freeScroll": true, "wrapAround": true }'>
        <?php
            $searchBtn = "SELECT * FROM robots";
            $search_qurey = mysqli_query($connect,$searchBtn);

            if($search_qurey == true){
                while($myData = mysqli_fetch_array($search_qurey)){   ?>
                    <form method="POST">
                        <a href="./info.php?page=<?php echo $myData['robotsID']?>" type="submit" data-value="<?php echo $myData['robotsID']?>" name="submit-btn">
                            <div id="robot-image">
                                <img src="<?php echo $myData['src']?>" alt="<?php echo $myData['alt']?>" class="company-carousel-cell">
                                <p class="overlay"><?php echo $myData['name']?></p>
                            </div>
                        </a>
                    </form>
        <?php }}?>
    </div>
</section>