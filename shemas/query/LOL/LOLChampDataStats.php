<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$shemaLOLChampData_Stats = new ObjectType([
    "name" => "LOLChampData_Stats_Fields",
    "fields" => [
        "flat" => [
            "type" => Type::float(),
            "resolve" => function ($rootValue) {
                return $rootValue["flat"] ?? null;
            }
        ],
        "percent" => [
            "type" => Type::float(),
            "resolve" => function ($rootValue) {
                return $rootValue["percent"] ?? null;
            }
        ],
        "perLevel" => [
            "type" => Type::float(),
            "resolve" => function ($rootValue) {
                return $rootValue["perLevel"] ?? null;
            }
        ],
        "percentPerLevel" => [
            "type" => Type::float(),
            "resolve" => function ($rootValue) {
                return $rootValue["percentPerLevel"] ?? null;
            }
        ]
    ]
]);
