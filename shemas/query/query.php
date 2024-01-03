<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$queryType = new ObjectType([
    'name' => 'Query',
    "fields" => [
        "test" => [
            "type" => new ObjectType([
                "name" => "test",
                "fields" => [
                    "testQuery" => [
                        "type" => Type::boolean(),
                        "resolve" => function ($root, $args) {
                            return true;
                        }
                    ],
                ]
            ])
        ],
        "LOL" => [
            "type" => new ObjectType([
                "name" => "LOL",
                "fields" => [
                    "getIDChampByName" => [
                        "type" => Type::int(),
                        "args" => [
                            "name" => Type::string()
                        ],
                        "resolve" => function ($root, $args) {
                            $IDChamp = DataStore::searchChampionExist($args['name'])["idChamp"];
                            return $IDChamp;
                        }
                    ],
                    "getInfoChampByName" => [
                        "type" => $shemaLOLChampData,
                        "args" => [
                            "name" => Type::string()
                        ],
                        "resolve" => function ($root, $args) {
                            return DataStore::getInfoChampionByName($args['name']);
                        }
                    ],
                ]
            ]),
            "resolve" => function ($root, $args) {
                return $root;
            }
        ],
    ]
]);
