<?php

function requestHTTP($url, $method = 'GET', $data = array())
{
    $method = strtoupper($method); // Assure que la méthode est en majuscules

    $ch = curl_init();

    // Si la méthode est GET et des données sont fournies, ajoute-les à l'URL
    if ($method === 'GET' && !empty($data)) {
        $url .= '?' . http_build_query($data);
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Si la méthode est POST, configure la requête avec les données POST
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }

    // Désactiver la vérification du certificat SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Exécution de la requête
    $response = curl_exec($ch);

    // Vérification des erreurs
    if ($response === false) {
        $response = curl_error($ch);
    }

    curl_close($ch);

    return $response;
}

function xmlToArray($xmlString)
{
    $xml = simplexml_load_string($xmlString);
    $json = json_encode($xml);
    $array = json_decode($json, TRUE);
    return $array;
}

function handleEmptyData()
{
    $error = [
        "errors" => [
            "message" => "Aucune donnée reçue ou données vides."
        ]
    ];
    echo json_encode($error);
    exit();
}

function handleUnsupportedMethod()
{
    $error = [
        "errors" => [
            "message" => "Méthode non supportée."
        ]
    ];
    echo json_encode($error);
    exit();
}
