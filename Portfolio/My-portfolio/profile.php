<!DOCTYPE html>
<html>

<head>
    <title>Hamza Terbouchi</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>

    <section class="s1">
        <div class="main-container">
            <div class="greeting-wrapper">
            <?php
                   $name = $_POST["name"];
                   $con = mysqli_connect("localhost","root","","myportfolio");
                            if (mysqli_connect_errno()){
                             echo "Failed to connect to MySQL: " . mysqli_connect_error();
                              }
                              $sql = "INSERT INTO `visitors` (`visitor_name`) VALUES ('$name')";
                              mysqli_query($con,$sql);

                              
                   echo "Hi " . $name . " !";
                ?>
            </div>
 

            <div class="intro-wrapper">
                <div class="nav-wrapper">
                    <a href="index.php">
                        <div class="dots-wrapper">
                            <img src="images/logo.png" alt="" style="max-width: 60%;">
                        </div>
                    </a>


                    <ul id="navigation">
                        <li><a href="#contact" style="color:#883f39;">Contact</a></li>

                    </ul>
                </div>

                <div class="left-column">
                    <img id="profile_pic" src="images/hamza.jpg">
                    <h5 style="text-align: center;line-height: 0;">Welcome !</h5>

                </div>

                <div class="right-column">

                    <div id="preview-shadow">
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>
                            <h3>What I Do</h3>
                            <p>I'm a <i>front-end</i> developper and i work in wordpress projects too </p>
                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">

            <div class="about-wrapper">
                <div class="about-me">
                    <h4>More about me</h4>

                    <p>A young man passionate about web development  and web design, making websites. <br>My next goal is to start making mobile apps !</p>

                    <p>I love anything that has a relationship with IT(Information Technology), and that's interest me very well</p>


                    <hr>

                    <h4>TOP EXPERTISE</h4>

                    <p>Wordpress / Front-end developper  <a target="_blank" href="resume.pdf">Download Resume</a></p>

                    <div id="skills">
                        <ul>
                            <li>HTML 5 </li>
                            <li>CSS/SASS</li>
                            <li>BalsamiQ</li>
                            <li>Adobe XD</li>
                            <li>Photoshop</li>
                        </ul>

                        <ul>
                            <li>Wordpress</li>
                            <li>PHP</li>
                            <li>JAVASCRIPT</li>
                            <li>MYSQL</li>
                            <li>Website tests</li>
                        </ul>

                    </div>

                </div>


                <div class="social-links">
                    <img id="social_img" src="images/follow.jpg">
                    <h3>Find me on Linkedin,Twitter & Github :</h3>

                    <a target="_blank" href="https://www.linkedin.com/in/terbouchi/"><strong>Linkedin:</strong> Terbouchi Hamza</a>
                    <br>
                    <a target="_blank" href="https://twitter.com/terbouchi">&nbsp;&nbsp;  <strong>Twitter:</strong> Hamza Terbouchi</a>
                    <br>
                    <a target="_blank" href="https://github.com/terbouchi">&nbsp; &nbsp; <strong>Github:</strong> Hamza Terbouchi</a>
                </div>
            </div>

        </div>
    </section>

    <section class="s1">
        <div class="main-container">
            <h3 style="text-align: center;">Some of my past projects</h3>

            <div class="post-wrapper">

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/sass-training.png">
                        <div class="post-preview">
                            <h6 class="post-title">Sass training</h6>
                            <p class="post-intro">This is my first time that I was training sass, it was a short project given to me by our school</p>
                            <hr>
                            <a href="http://sass-training.rf.gd/" target="_blank">Visit the link</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/clm.png">
                        <div class="post-preview">
                            <h6 class="post-title">Contre la montre</h6>
                            <p class="post-intro">It was a challenge, the objective was to modify some css / sass and install npm packages in half day</p>
                            <hr>
                            <a href="http://contre-la-montre.rf.gd/" target="_blank">Visit the link</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/corona-test.png">
                        <div class="post-preview">
                            <h6 class="post-title">Corona test</h6>
                            <p class="post-intro">This is the first school project I worked on during my quarantine contains html / css and some javascript</p>
                            <hr>
                            <a href="http://corona-test.rf.gd/" target="_blank">Visit the link</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/k2s.png">
                        <div class="post-preview">
                            <h6 class="post-title">K2s-efficience</h6>
                            <p class="post-intro">My first traineeship was full of experience,during that i developed a wordpress website of a coaching agency</p>
                            <hr>
                            <a href="https://www.k2s-efficience.com" target="_blank">Visit the link</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="s2" id="contact">
        <div class="main-container">
            <a href=""></a>
            <h3 style="text-align: center;">Have something in your mind ?</h3>

            <form id="contact-form">
                <h4 style="text-align: center;" class="sent-notification"></h4>
                

                <label>Name</label>
                <input id="name" class="input-field" type="text" name="name">

                <label>Email</label>
                <input id="email" class="input-field" type="text" name="email">

                <label>subject</label>
                <input id="subject" class="input-field" type="text" name="subject">

                <label>Message</label>
                <textarea id="body" class="input-field" name="message"></textarea>
                <div id="send-btn">
                <button id="submit-btn" type="button" onclick="sendEmail()" value="Send an Email">Send me a message !</button>
                </div>          
            </form>
        </div>
    </section>
<center>
    <section id="lab_social_icon_footer">
        
        
        <div class="footer">
        <img src="images/logo.png" alt="" style="max-width: 60%;margin-bottom: 2.5rem;margin-top: 2rem;">
            <div class="text-center center-block">
                <a href="https://www.linkedin.com/in/terbouchi/"><i id="social-lk" class="fa fa-linkedin-square fa-3x social"></i></a>
	            <a href="https://twitter.com/terbouchi"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://github.com/terbouchis"><i id="social-gh" class="fa fa-github-square fa-3x social"></i></a>
	            
            </div>
            <p>© Copyright <span id="getyear"></span> . Made by Hamza Terbouchi.</p>
        </div>
        <hr>
        </section>
        </center>
        

    <script type="text/javascript" src="script.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>

    
</body>

</html>