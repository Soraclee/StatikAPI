<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;


$queryType = new ObjectType([
    'name' => 'Query',
    "fields" => [
        "status" => [
            "type" => Type::string(),
            "resolve" => function () {
                return "GraphQL is awesome!";
            }
        ]
    ]
]);
