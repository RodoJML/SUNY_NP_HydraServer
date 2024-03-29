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
                <title>Clubs</title>
                <link rel=\"stylesheet\" href=\"./assets/css/clubs/clubs.css\">
            </head>
            
            <body>
                <div class=\"clubs\">
                        <h1 class=\"heading\">Clubs of Computer Science</h1>
            
                        <div class=\"mainbody\">

                                <div class=\"club\">
                                <h1 class=\"subheading\">Eleet Coders</h1>
                                <img class=\"clubimage\" src=\"./assets/images/ecc.png\" alt=\"Eleet Coders Club\" class=\"ecc\">
                                <p>Eleet Coders club focuses on helping students achieve goals to further 
                                    their career. This is done through hosted hackathons to network and 
                                    come up with creative ideas, interview preparation sessions, and 
                                    resume review. Meetings are every Thursday from 6:30PM to 8:30PM in 
                                    Science Hall 271. Remember to bring a laptop, notebook, and pencil!
                                </p>
                                <div class=\"socialmediagrid\">
                                    <a href=\"https://www.instagram.com/npeleetcoders/\" target=\"blank\">
                                        <img src=\"./assets/images/instagram.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"mailto:eleetcoders7@gmail.com\">
                                        <img src=\"./assets/images/mail.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"https://eleetcoders.com/\" target=\"blank\">
                                        <img src=\"./assets/images/website.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"https://discord.gg/TMME8psFdN\" target=\"blank\">
                                        <img src=\"./assets/images/discord.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/facebook.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/twitter.webp\" class=\"socialicon\"></img>
                                    </a>

                                </div>
                            </div>

                            <br/><br/>
            
                            <div class=\"club\">
                                <h1 class=\"subheading\">Computer Science Club</h1>
                                <img class=\"clubimage\" src=\"./assets/images/csc.png\" alt=\"Computer Science Club\" class=\"csc\">
                                <p>The Computer Science Club is a project based club where students
                                    can collaborate and work together to learn various topics in
                                    the field of computer science. Meeting are every Wedensday at 6:30PM
                                    in Science Hall 259. Students of any background, major,
                                    and skill level are welcome. 
                                </p>
                                <div class=\"socialmediagrid\">
                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/instagram.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\">
                                        <img src=\"./assets/images/mail.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/website.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/discord.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/facebook.png\" class=\"socialicon\"></img>
                                    </a>

                                    <a href=\"\" target=\"blank\">
                                        <img src=\"./assets/images/twitter.webp\" class=\"socialicon\"></img>
                                    </a>

                                </div>
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

