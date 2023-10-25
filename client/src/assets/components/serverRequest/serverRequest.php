<?php
    header("Content-Type: application/json");
    
    if($_GET["modalEnabled"] == "false"){

        $modalEnabled = true;

        echo json_encode(["content" => 
        "
            <div class=\"serverRequest\">
                <h1 class=\"heading\">Request Server Access</h1>
                <div class=\"mainModalWindow\">
                    <div class=\"modalContent\">
                        <form action=\"serverRequest.php\" method=\"post\">
                            <label for=\"studentid\">🪪 Student ID</label><br>
                            <input type=\"text\" id=\"studentid\" name=\"studentid\" required><br><br>
                            <label for=\"name\">🧑‍🎓 Full Name</label><br>
                            <input type=\"text\" id=\"name\" name=\"name\" required><br><br>
                            <label for=\"email\">📧 New Paltz Email</label><br>
                            <input type=\"email\" id=\"email\" name=\"email\" required><br><br><br>
                            <input type=\"submit\" value=\"Send Request\">
                        </form>
                    </div>
                </div>
            </div>
        ", "modalEnabled" => $modalEnabled]);
    } else {
        $modalEnabled = false;
        echo json_encode(["modalEnabled" => $modalEnabled]);
    }
?>



