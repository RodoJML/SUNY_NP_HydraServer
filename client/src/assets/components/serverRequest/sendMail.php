<?php
    header("Content-Type: application/json");
    mail("menesesr1@newpaltz.edu", "Server Request {$GET["msg"]}", $_GET["msg"]);
    echo json_encode(["response" => "Email sent using PHP mail function"]);
?>