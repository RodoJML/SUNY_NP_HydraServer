<?php
    header("Content-Type: application/json");
    
    if($_GET["modalEnabled"] == "false"){

        $modalEnabled = true;

        echo json_encode(["content" => 
        "
        <!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"stylesheet\" href=\"./assets/css/resources/resources.css\">
            <title>Resources</title>
        </head>
        
        <body>
            <div class=\"resources\">
        
                <h1 class=\"heading\">Resources</h1>
        
                <p class=\"maindescription\">Discover a treasure trove of software development resources that can turbocharge your coding skills and project success. Explore these valuable links.</p>
        
                    <h1 class=\"subheading\">Java:</h1>
                
                    <div class=\"grid-container\">
        
                        <div class=\"grid-item\" >
                            <a href=\"https://docs.oracle.com/javase/tutorial/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://pbs.twimg.com/profile_images/1410016948977422337/rKU8iR89_400x400.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    Official Oracle Java Tutorials
                                </h4>
                                <p class=\"description\">
                                    Practical guides for programmers who want to use the Java to create applications.
                                </p>
                            </a>
                        </div>
        
                        <div class=\"grid-item\" >
                            <a href=\"https://www.w3schools.com/java/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://pbs.twimg.com/profile_images/613636334356459520/qVr_MxvA_400x400.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    W3 Schools Java Tutorial
                                </h4>
                                <p class=\"description\">
                                    Java tutorials that covers the basics of Java
                                </p>
                            </a>
                        </div>
        
                        <div class=\"grid-item\" >
                            <a href=\"https://java-programming.mooc.fi/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://www.helsinki.fi/assets/drupal/styles/og_images/s3/media-image/we-stand-with-ukraine_0.jpg?itok=xwhNgkys\" alt=\"Java\">
                                <h4 class=\"title\">
                                    University of Helsinki's Java MOOC
                                </h4>
                                <p class=\"description\">
                                    A free online course on learning Java
                                </p>
                            </a>
                        </div>
        
                        <div class=\"grid-item\" >
                            <a href=\"https://www.udemy.com/course/java-tutorial/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://play-lh.googleusercontent.com/oDuTGEHru1KMr3QOfQfPKgIdNnlq3WWQxpBYND23r2a7RVnS1HW0t7dyON86Vn_QhtM\" alt=\"Java\">
                                <h4 class=\"title\">
                                    Udemy Java Course
                                </h4>
                                <p class=\"description\">
                                    A free Java web development online course on Udemy
                                </p>
                            </a>
                        </div>
                    </div>
        
                    <h1 class=\"subheading\">Web Development:</h1>
        
                    <div class=\"grid-container\">
        
                        <div class=\"grid-item\" >
                            <a href=\"https://www.theodinproject.com/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://www.dreamstojourneys.com/wp-content/uploads/2022/03/THE-ODIN-PROJECT-Training-Resources.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    Odin Project
                                </h4>
                                <p class=\"description\">
                                    A hands-on introduction to all of the essential tools you'll need to build real, working websites.
                                </p>
                            </a>
                        </div>
        
                        <div class=\"grid-item\" >
                            <a href=\"https://www.w3schools.com/whatis/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://pbs.twimg.com/profile_images/613636334356459520/qVr_MxvA_400x400.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    W3 Schools Web Development
                                </h4>
                                <p class=\"description\">
                                    Resources for HTML, CSS, JavaScript, NodeJS, and MySQL fundamentals.
                                </p>
                            </a>
                        </div>
        
                        <div class=\"grid-item\" >
                            <a href=\"https://www.youtube.com/@TraversyMedia/playlists\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/YouTube_play_button_square_%282013-2017%29.svg/640px-YouTube_play_button_square_%282013-2017%29.svg.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    Traversy YouTube Playlist
                                </h4>
                                <p class=\"description\">
                                    A YouTube playlist of web development tutorials by Traversy Media
                                </p>
                            </a>
                        </div>
        
                        <div class=\"grid-item\" >
                            <a href=\"https://www.youtube.com/watch?v=9ylj9NR0Lcg\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/YouTube_play_button_square_%282013-2017%29.svg/640px-YouTube_play_button_square_%282013-2017%29.svg.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    Traversy MySQL Crash Course
                                </h4>
                                <p class=\"description\">
                                    MySQL Crash Course by Traversy media.
                                </p>
                            </a>
                        </div>
        
                    </div>
        
                    <h1 class=\"subheading\">Cybersecurity:</h1>
        
                    <div class=\"grid-container\">
        
                        <div class=\"grid-item\" >
                            <a href=\"https://tryhackme.com/\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://tryhackme-images.s3.amazonaws.com/room-icons/c916cc3206c2199f9b5e9db43d5a15e9.png\" alt=\"Java\">
                                <h4 class=\"title\">
                                    Try Hack Me
                                </h4>
                                <p class=\"description\">
                                    Online platform for learning Cybersecurity.
                                </p>
                            </a>
                        </div>
        
                    </div>
        
                    <h1 class=\"subheading\">Linux:</h1>
        
                    <div class=\"grid-container\">
        
                        <div class=\"grid-item\" >
                            <a href=\"https://linuxcommand.org/tlcl.php\" target=\"_blank\">
        
                                <img class=\"image\" src=\"https://m.media-amazon.com/images/I/81tKmn7KX1L._AC_UF1000,1000_QL80_.jpg\" alt=\"Java\">
                                <h4 class=\"title\">
                                    The Linux Command Line
                                </h4>
                                <p class=\"description\">
                                    Learn additional Linux history, techniques, and skills.
                                </p>
                            </a>
                        </div>
        
                    </div>
        
            
            </div>
        </body>
        </html>
        ",
        "modalEnabled" => $modalEnabled]);
    } else {
        $modalEnabled = false;
        echo json_encode(["modalEnabled" => $modalEnabled]);
    }
?>

