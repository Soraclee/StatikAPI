<?php

if ($_SERVER["HTTP_HOST"] == "localhost") {
    header("Access-Control-Allow-Origin: http://localhost:8080");
} else {
    header("Access-Control-Allow-Origin: *");
}

header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, Set-Cookie, Anemy-Language, Statik-Language");
header("Access-Control-Allow-Methods: *");
header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, Set-Cookie, Anemy-Language, Statik-Language");
    exit(0);
}
