<?php
    header("Content-Type: application/json");
    $subject = "Server Request".$_GET["msg"];
    mail("menesesr1@newpaltz.edu", $subject, $_GET["msg"]);
    echo json_encode(["response" => "Email sent using PHP mail function"]);
?>