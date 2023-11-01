<?php
    header("Content-Type: application/json");
    mail("menesesr1@newpaltz.edu", "Server Request ".$GET["id"], $_GET["message"]);
    echo json_encode(["response" => "Email sent using PHP mail function"]);
?>