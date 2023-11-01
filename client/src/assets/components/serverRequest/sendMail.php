<?php
    require_once realpath(__DIR__ . '/.env');
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    header("Content-Type: application/json");
    // mail("menesesr1@newpaltz.edu", "Server Access Request (".$_GET["id"].")", $_GET["message"]);
    echo json_encode(["response" => $_ENV['EMAIL']]);
?>