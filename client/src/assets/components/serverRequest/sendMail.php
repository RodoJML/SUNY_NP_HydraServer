<?php
    header("Content-Type: application/json");
    mail("hoffmank4@newpaltz.edu", "Server Access Request (".$_GET["id"].")", $_GET["message"]);
    echo json_encode(["response" => "Email sent"]);
?>