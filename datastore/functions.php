<?php

function requestHTTP($url, $method = 'GET', $data = array(), $headers = array())
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

    // Ajout des en-têtes personnalisés, s'ils sont fournis
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
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

function timeAgo($timestamp)
{
    $current_time = time();
    $time_difference = $current_time - $timestamp;
    $seconds = $time_difference;
    $minutes = round($seconds / 60);           // 60 seconds in a minute
    $hours = round($seconds / 3600);           // 3600 seconds in an hour
    $days = round($seconds / 86400);           // 86400 seconds in a day
    $weeks = round($seconds / 604800);         // 604800 seconds in a week
    $months = round($seconds / 2629440);       // 2629440 seconds in a month
    $years = round($seconds / 31553280);       // 31553280 seconds in a year

    if ($seconds <= 60) {
        return "A few seconds ago";
    } elseif ($minutes <= 60) {
        if ($minutes == 1) {
            return "A minute ago";
        } else {
            return "$minutes minutes ago";
        }
    } elseif ($hours <= 24) {
        if ($hours == 1) {
            return "An hour ago";
        } else {
            return "$hours hours ago";
        }
    } elseif ($days <= 7) {
        if ($days == 1) {
            return "A day ago";
        } else {
            return "$days days ago";
        }
    } elseif ($weeks <= 4.3) {
        if ($weeks == 1) {
            return "A week ago";
        } else {
            return "$weeks weeks ago";
        }
    } elseif ($months <= 12) {
        if ($months == 1) {
            return "A month ago";
        } else {
            return "$months months ago";
        }
    } else {
        if ($years == 1) {
            return "A year ago";
        } else {
            return "$years years ago";
        }
    }
}
