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
                <link rel=\"stylesheet\" href=\"./assets/css/serverRequest/serverRequest.css\">
                <title>Server Request</title>
            </head>
            <body>

                <div class=\"serverRequest\">
                    <h1 class=\"heading\">Request Server Access</h1>
                    <div class=\"mainModalWindow\">
                        <div class=\"modalContent\">
                            <form id=\"noRefreshForm\" method=\"POST\" action=\"./\">
                                <label for=\"studentid\">🪪 Student ID</label><br>
                                <input type=\"text\" id=\"studentid\" name=\"studentid\" required><br><br>
                                <label for=\"name\">🧑‍🎓 Full Name</label><br>
                                <input type=\"text\" id=\"name\" name=\"name\" required><br><br>
                                <label for=\"email\">📧 New Paltz Email</label><br>
                                <input type=\"email\" id=\"email\" name=\"email\" required><br><br><br>
                                <input type=\"submit\" id=\"submit-btn\" value=\"Send Request\">
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                document.getElementById(\"noRefreshForm\").addEventListener(\"submit\", function(event){
                    event.preventDefault()
                    
                    var studentid = document.getElementById(\"studentid\").value;
                    var name = document.getElementById(\"name\").value;
                    var email = document.getElementById(\"email\").value;

                    console.log(studentid);
                    $(\".modalContent\").fadeOut(300);
                    $(\".mainModalWindow\").append(\"<img style='width:10rem; margin-left:33%; margin-top:20%' src=./assets/images/sent.png>\").fadeIn(300);
                    $(\".displayArea\").delay(1300).slideUp(300).hide('slow');
                });

                
                </script>

            </body>
        </html>
        ", "modalEnabled" => $modalEnabled]);
    } else {
        $modalEnabled = false;
        echo json_encode(["modalEnabled" => $modalEnabled]);
    }
?>



