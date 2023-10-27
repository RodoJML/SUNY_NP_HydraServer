<?php
    header("Content-Type: application/json");
    
    if($_GET["modalEnabled"] == "false"){

        $modalEnabled = true;

        echo json_encode(["content" => 
        "
        <div class=\"calendar\">
            <h1 class=\"heading\">Calendar</h1>
            <iframe src=\"https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23B39DDB&ctz=America%2FNew_York&showTitle=0&src=cmptZW5lczFAYXN1LmVkdQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%2333B679&color=%230B8043\" width=\"100%\" height=\"720\" frameborder=\"0\" scrolling=\"no\"></iframe>
            <img class=\"ggglgif\" src=\"./assets/images/calendar.gif\" alt=\"ggglgif\">
        </div>",
        "modalEnabled" => $modalEnabled]);
    } else {
        $modalEnabled = false;
        echo json_encode(["modalEnabled" => $modalEnabled]);
    }
?>

