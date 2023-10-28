<?php
    header("Content-Type: application/json");
    
    if($_GET["modalEnabled"] == "false"){

        $modalEnabled = true;

        echo json_encode(["content" => 
        "
        <div class=\"rules\">
            <h1 class=\"heading\">Rules of the Lab</h1>

            <div class=\"mainbody\">
                <p>Welcome to the SUNY New Paltz Computer Science Lab. 
                In order to maintain a productive and safe environment for all users,
                please adhere to the following rules and guidelines while using this facility:</p>
                
                <br/><br/>
                <h4>Lab Hours:</h4>
                <p>The lab is open during specific hours posted by the Computer Science Department.
                Access to the lab is only allowed during these designated hours.</p>

                <h4>Lab Asssitant/Staff Presence:</h4>
                <ul>
                    <li>The lab is accesible only when a lab assistant or st.</li>
                    <li>Students must comply with instructions provided by lab assistants and staff.</li>
                </ul>

                <h4>Computer Use:</h4>
                <ul>
                    <li>Do not attempt to install or unistall software or modify computer configurations.</li>
                    <li>Save your work to external devices or cloud storage as all data may be wiped upon logoff.</li>
                </ul>

                <h4>Personal Belongings:</h4>
                <ul>
                    <li>Keep personal belongings secure and avoid cluttering workspaces.</li>
                    <li>The university is not responsible for lost or stolen items.</li>
                </ul>

                <h4>Respect for Equipment:</h4>
                <ul>
                    <li>Treat computers, peripherals, and lab equipment with care.</li>
                    <li>Report anu malfunctioning equipment to lab staff immediately.</li>
                </ul>

                <h4>Network Usage:</h4>
                <ul>
                    <li>Use the university network for educational purposes only.</li>
                    <li>Do not engage in activities that violate university policies or local laws.</li>
                </ul>

                <h4>Personal Software and Data:</h4>
                <ul>
                    <li>Do not install personal software or store personal data on lab computers.</li>
                    <li>Remove all personal files from the computer before logging off.</li>
                </ul>

                <h4>Compliance with University Policies:</h4>
                <ul>
                    <li>Follow all university policies and the student code of conduct.</li>
                    <li>Academic integrity and ethical behavior are expected at all times.</li>
                </ul>

                <h4>Reporting Issues</h4>
                <p>
                    Report any technical issues, safety concerns, or violations of these rules to lab staff. </br>
                    Failure to comply with these rules may result in loss of lab privileges and/or disciplinary action. 
                    Thank you for your  cooperation in creating a productive and respectful learning environment.
                </p>
            </div>
        </div>",
        "modalEnabled" => $modalEnabled]);
    } else {
        $modalEnabled = false;
        echo json_encode(["modalEnabled" => $modalEnabled]);
    }
?>
