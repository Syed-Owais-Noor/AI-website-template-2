<section class="company">
    <div id="company">
        <h2 id="company-h2">WHY ROBOTS?</h2>
        <p id="company-p">
            All the Companies presented in the slider believe that robots will soon be everywhere,
            so the question is that:
        </p> <br>
        <center> "How can we nurture them to be our friends and useful collaborators?" </center> <br>
        <p id="company-p">
            To this question, they reply robots with good aesthetic design, rich personalities,
            and social-cognitive intelligence can potentially connect deeply and meaningfully with humans.
            There are many organizations that are working in the field of AI.
            But the organizations which are presented in the slider are the top organizations that have made few 
            humanoids and AI robots.
        </p>
    </div>

    <div class="company-carousel" data-flickity='{ "groupCells": true, "autoPlay": true, "freeScroll": true, "wrapAround": true }'>
    <?php
        $searchBtn = "SELECT * FROM companies";
        $search_qurey = mysqli_query($connect,$searchBtn);

        if($search_qurey == true){
            while($myData = mysqli_fetch_array($search_qurey)){   ?>
                <div>
                    <img src="<?php echo $myData['src']?>" alt="<?php echo $myData['alt']?>" class="company-carousel-cell">
                </div>
    <?php }}?>
    </div>
</section>