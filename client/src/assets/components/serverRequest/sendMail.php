<?php
    header("Content-Type: application/json");
    mail("menesesr1@newpaltz.edu", "Server Access Request (".$_GET["id"].")", $_GET["message"]);
    mail($_GET["emailAdd"], "Hydra Server Request Confirmation", "Your request has been sent to the Hydra Lab administrators.\nTry to access the server again in the next days.");
    echo json_encode(["response" => "Email sent using PHP"]);
?>