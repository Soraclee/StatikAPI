<?php

use GraphQL\Error\FormattedError;

function error($id, $commentOptionnal = null, $lang = "en")
{
    $message = null;
    if (isset($_SERVER["HTTP_ANEMY_LANGUAGE"])) {
        if ($_SERVER["HTTP_ANEMY_LANGUAGE"] == "fr" || $_SERVER["HTTP_ANEMY_LANGUAGE"] == "en") {
            $message = getErrorByID($id, $_SERVER["HTTP_ANEMY_LANGUAGE"]);
        } else {
            $message = getErrorByID($id, $lang);
        }
    } else {
        $message = getErrorByID($id, $lang);
    }
    FormattedError::setInternalErrorMessage($message);
    throw new Error();
}

function getErrorByID($id, $lang = "en")
{
    $errors = [
        1 => [
            "fr" => "Un ou plusieurs argument(s) manquant(s)",
            "en" => "One or more missing argument(s)"
        ],
        2 => [
            "fr" => "La région demandée n'existe pas",
            "en" => "The requested region does not exist"
        ]
    ];

    return $errors[$id][$lang];
}
