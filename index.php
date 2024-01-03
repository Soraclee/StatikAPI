<?php
require_once("vendor/autoload.php");
require_once("datastore/functions.php");
require_once("datastore/DataStore.php");
require_once("utils/typeLoader.php");
require_once("utils/cors.php");

use GraphQL\GraphQL;
use GraphQL\Type\Schema;


$schema = new Schema([
    'query' => $queryType,
]);


try {
    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === "POST") {
        $rawInput = file_get_contents("php://input");
        if ($rawInput === false || $rawInput === '') {
            handleEmptyData();
        }
        $input = json_decode($rawInput, true);
        $query = $input["query"] ?? '';
        $variableValues = $input["variables"] ?? null;
    } elseif ($method === "GET") {
        $query = $_GET["query"] ?? '';
        if ($query === false || $query === '') {
            handleEmptyData();
        }
        $variableValues = json_decode($_GET["variables"] ?? '', true);
    } else {
        handleUnsupportedMethod();
    }

    $result = GraphQL::executeQuery($schema, $query, [], null, $variableValues);
    $output = $result->toArray();
} catch (\Exception $e) {
    $output = [
        "errors" => [
            "message" => $e->getMessage()
        ]
    ];
}

header("Content-Type: application/json");
echo json_encode($output);

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
