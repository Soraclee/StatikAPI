<?php
require_once("vendor/autoload.php");
require_once("utils/typeLoader.php");

use GraphQL\GraphQL;
use GraphQL\Type\Schema;


$schema = new Schema([
    'query' => $queryType,
]);


try {
    $rawInput = file_get_contents("php://input");
    $input = json_decode($rawInput, true);
    $query = $input["query"];
    $variableValues = isset($input["variables"]) ? $input["variables"] : null;

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
