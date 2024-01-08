<?php
header("Content-Type: application/json");
require_once __DIR__ . '/../../vendor/autoload.php';

require "../openid/utils/openid.php";

$openid = new LightOpenID('http://localhost/StatikApi/static/openid/steam.php');

if (!$openid->mode) {
    $openid->identity = 'https://steamcommunity.com/openid';
    header('Location: ' . $openid->authUrl());
} elseif ($openid->mode == 'cancel') {
    $jsonReturn = [
        "error" => [
            "code" => 1,
            "message" => "Authentification annulée"
        ]
    ];
    echo json_encode($jsonReturn);
    exit();
} else {
    // Étape 2 : L'utilisateur est authentifié, récupérez le SteamID
    if ($openid->validate()) {
        // Récupération de l'ID Steam
        $steamID = $openid->identity;
        $pattern = "/^https:\/\/steamcommunity\.com\/openid\/id\/(\d+)$/";
        preg_match($pattern, $steamID, $matches);
        $steamID64 = $matches[1];

        header("Location: http://localhost:4000/cs2?steamID=" . $steamID64);
        exit();
    } else {
        // Échec de validation de l'authentification
        $jsonReturn = [
            "error" => [
                "code" => 2,
                "message" => "Échec de l'authentification"
            ]
        ];
        echo json_encode($jsonReturn);
        exit();
    }
}
