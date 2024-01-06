<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$shemaCS2NewsData = new ObjectType([
    "name" => "CS2NewsData",
    "fields" => [
        "id" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["gid"];
            }
        ],
        "title" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["title"];
            }
        ],
        "url" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["url"];
            }
        ],
        "author" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["author"];
            }
        ],
        "content" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["contents"];
            }
        ],
        "feedlabel" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["feedlabel"];
            }
        ],
        "appid" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["appid"];
            }
        ],
        "tags" => [
            "type" => Type::listOf(Type::string()),
            "resolve" => function ($rootValue) {
                return $rootValue["tags"];
            }
        ],
    ]
]);
