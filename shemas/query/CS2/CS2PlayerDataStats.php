<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;


$shemaCS2PlayerDataStats = new ObjectType([
    "name" => "CS2PlayerDataStats",
    "fields" => [
        "name" => [
            "type" => Type::string()
        ],
        "value" => [
            "type" => Type::int()
        ],
    ],
]);
