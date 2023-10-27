<?php
    header("Content-Type: application/json");
    
    if($_GET["modalEnabled"] == "false"){

        $modalEnabled = true;

        echo json_encode(["content" => 
        "
                <div class=\"about\">

                <div class=\"grid-container\">

                    <div class=\"grid-item1\">
                        
                        <span class=\"heading\">Welcome </span>  to the Hydra Lab, the heart of computer science innovation at <strong>SUNY New Paltz</strong>!<br/>
                            Our lab is not just a place for learning; it's a vibrant hub where students come together to explore,<br/>
                            collaborate, and immerse themselves in the fascinating world of computer science.
                        </p>
                    </div>
                    
                    <div class=\"grid-item1\">
                        <h1 class=\"heading\">A collaborative Space:</h1>
                    </div>

                    <div class=\"grid-item2\">
                        <img src=\"./assets/images/LoungeWithFront.jpg\" alt=\"LoungeWithFront\">
                    </div>

                    <p class=\"grid-item2\">
                        At the Hydra Lab, we believe in the power of collaboration. 
                        Our longe area provides students with a comfotable and inviting space to meet,
                        share ideas, and build lasting connections with their peers. Whether you're 
                        working on a group project or simply looking for a place to relac between classes,
                        our lounge area is the perfect spot to hang out and foster a sense of community
                        within the computer science department.
                    </p>

                    <div class=\"grid-item1\">
                        <h1 class=\"heading\">A Diverse Computing Environments:</h1>
                    </div>

                    <div class=\"grid-item2\">
                        <img src=\"./assets/images/Computers1.jpg\" alt=\"Computers1\">
                    </div>

                    <p class=\"grid-item2\">
                        We understand that every student has their own preferred operating system,
                        which is why we offer a diverse range of computing environments.
                        Our lab is equipped with Windows, macOS and Ubuntu. These systems are available
                        free of charge to all students, ensuring that everyone has access to the tools
                        they need to succed in their coursework and projects.
                    </p>

                    <div class=\"grid-item1\">
                        <h1 class=\"heading\">
                        Meet Hydra <img src=\"./assets/images/server.gif\" alt=\"servergif\"> Your Personal Server:
                        </h1>
                        
                        
                    </div>

                    <div class=\"grid-item2\">
                        <img src=\"./assets/images/HydraServer1.jpg\" alt=\"HydraServer1\">
                    </div>

                    <p class=\"grid-item2\">
                        One of the standout features of our lab is the Hydra server, a powerful resource
                        for computer science students. Hydra hosts a range of software, tools, and resources
                        that can aid you in your academic and research endeavors. Hydra runs on Ubuntu,
                        providing a versatile and Linux-friendly environment for students to work in.
                        Students can request an account by filling out the online form (Link here).
                        To learn your way around Linux, check out our resources page.
                        The Hydra Lab at SUNY New Paltz is more than just a place to work on assigments;
                        it's a dynamic space where students can connect, learn, and grow together. Whether 
                        you are a beginner or an experienced coder, the Hydra Lab is here to support the 
                        journey in computer science.
                    </p>
                </div>
            </div>
            <br/><br/><br/>

        ", "modalEnabled" => $modalEnabled]);
    } else {
        $modalEnabled = false;
        echo json_encode(["modalEnabled" => $modalEnabled]);
    }
?>