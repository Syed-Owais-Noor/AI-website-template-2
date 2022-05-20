        <?php
            if (isset($_POST['send_btn'])) {
                $fullName = $_POST['full_name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // Function call
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $insertBtn = $connect->prepare("insert into inbox(full_name, email, message) values('$fullName', '$email', '$message')");

                    if ($insertBtn->execute())
                    {
                        echo "<script> Swal.fire('MESSAGE SEND', 'Your message has been send succesfully!', 'success'); </script>";
                    }
                    else
                    {
                        echo "<script> Swal.fire('MESSAGE FAILED', 'Database connection error!', 'error'); </script>";
                    }
                }
                else {
                    echo "<script> Swal.fire('MESSAGE FAILED', 'Your email format is wrong!', 'error'); </script>";
                }
            }
        ?>
        
        <section id="contact-us">
            <footer>
                <a id="back-to-top" title="Back to top" href="#"><i class="fas fa-chevron-up"></i></a>

                <div class="contact-us">
                    <h2 id="contact-us-h2">CONTACT US</h2>

                    <div class="contact-us-list">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i>   AREA 5D 81/10 LANDHI # 06</li>
                            <li><i class="fab fa-whatsapp"></i> (+92)317-0295857</li>
                            <li><i class="far fa-envelope"></i> owaisnoorsyef@gmail.com</li>
                        </ul>
                    </div>

                    <img src="./images/logo.png" alt="Website logo" id="contact-us-logo">

                    <div class="contact-us-list">
                        <ul>
                            <a href="https://www.facebook.com"><li id="social"><i class="fab fa-facebook-f"></i></li></a>
                            <a href="https://www.linkedin.com"><li id="social"><i class="fab fa-linkedin-in"></i></li></a>
                            <a href="https://www.youtube.com"><li id="social"><i class="fab fa-youtube"></i></li></a>
                        </ul>
                    </div>
                </div>

                <div class="contact-us-form">
                    <form method="POST" id="form">
                        <h3 id="contact-us-form-h3">SEND MESSAGE</h3>

                        <div id="inputBox">
                            <input type="text" name="full_name" required>
                            <label>FULL NAME</label>
                        </div>
                        <div id="inputBox">
                            <input type="text" id="email" name="email" required>
                            <label>EMAIL</label>
                        </div>
                        <div id="inputBox">
                            <textarea maxlength="150" required name="message"></textarea>
                            <label>TYPE YOUR MESSAGE.....</label>
                            <div id="the-count">
                                <span id="current">0</span>
                                <span id="maximum">/ 150</span>
                            </div>
                        </div>

                        <button class="button" name="send_btn"><span>Send </span></button>
                    </form>
                </div>
            </footer>
        </section>
        
        <!-- Script -->

        <!-- Menu -->
        <script>
            $(document).ready(function() {
            $('#icon').click(function(){
                    $('ul').toggleClass('show');
            });
            });
        </script>
        
        <!-- Particle Effect -->
        <script src="./js/particles.min.js"></script>
        <script src="./js/app.js"></script>

        <!-- Typing Effect -->
        <script>
            const typedTextSpan = document.querySelector(".typed-text");
            const cursorSpan = document.querySelector(".cursor");

            const textArray = [
                "SERVE PEOPLE WORLDWILD.", /*Honda Motor*/
                "START YOUR ROBOTICS JOURNEY.", /*Softbank Robotics*/
                "THE FUTURE DOESN'T INVENT ITSELF.", /*Toyota Motor*/
                "WE BUILD MACHINES WITH HUMAN-LIKE INTELLIGENCE.", /*Kindred AI*/
                "INNOVATION IS IN OUR DNA.", /*Ubtech*/
                "WE BRING ROBOTS TO LIFE." /*Hanson AI*/
            ];
            const typingDelay = 100;
            const erasingDelay = 50;
            const newTextDelay = 2000; // Delay between current and next text
            let textArrayIndex = 0;
            let charIndex = 0;

            function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } 
            else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
            }

            function erase() {
                if (charIndex > 0) {
                if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } 
            else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if(textArrayIndex>=textArray.length) textArrayIndex=0;
                setTimeout(type, typingDelay + 1100);
            }
            }

            document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
            if(textArray.length) setTimeout(type, newTextDelay + 250);
            });
        </script>

        <script>
            const typedTextSpan = document.querySelector(".typed-text");
            const cursorSpan = document.querySelector(".cursor");

            const textArray = ["hard", "fun", "a journey", "LIFE"];
            const typingDelay = 100;
            const erasingDelay = 100;
            const newTextDelay = 2000; // Delay between current and next text
            let textArrayIndex = 0;
            let charIndex = 0;

            function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } 
            else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
            }

            function erase() {
                if (charIndex > 0) {
                if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } 
            else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if(textArrayIndex>=textArray.length) textArrayIndex=0;
                setTimeout(type, typingDelay + 1100);
            }
            }

            document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
            if(textArray.length) setTimeout(type, newTextDelay + 250);
            });
        </script>

        <script>
            /*Scroll to top when arrow up clicked BEGIN*/

            $(window).scroll(function() {
                var height = $(window).scrollTop();
                if (height > 100) {
                    $('#back-to-top').fadeIn();
                    $('#header').fadeOut();
                } else {
                    $('#back-to-top').fadeOut();
                    $('#header').fadeIn();
                }
            });
            $(document).ready(function() {
                $("#back-to-top").click(function(event) {
                    event.preventDefault();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                });

            });
        </script>

        <script>
            $('textarea').keyup(function() {
    
                var characterCount = $(this).val().length,
                    current = $('#current'),
                    maximum = $('#maximum'),
                    theCount = $('#the-count');
                
                current.text(characterCount);
                
                if (characterCount >= 140) {
                    maximum.css('color', '#e91e63');
                    current.css('color', '#e91e63');
                } else {
                    maximum.css('color','#fff');
                    current.css('color', '#fff');
                }   
            });
        </script>

        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href);
            }
        </script>

        <script>
            $('iframe').each(function() {
                if ($(this).attr('src') == '') {
                    $('#video').css('height', '0vh');
                }
            });
        </script>
    </body>
</html>