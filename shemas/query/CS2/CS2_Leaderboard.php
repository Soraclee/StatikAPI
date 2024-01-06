<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;


$shemaCS2Leaderboard = new ObjectType([
    "name" => "CS2Leaderboard",
    "fields" => [
        "rank" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["rank"] ?? null;
            }
        ],
        "rating" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["rating"] ?? null;
            }
        ],
        "name" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["name"] ?? null;
            }
        ],
        "matches_won" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["matches_won"] ?? null;
            }
        ],
        "matches_tied" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["matches_tied"] ?? null;
            }
        ],
        "matches_lost" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["matches_lost"] ?? null;
            }
        ],
        "map_stats" => [
            "type" => new ObjectType([
                "name" => "CS2Leaderboard_MapStats",
                "fields" => [
                    "anubis" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["anubis"] ?? null;
                        }
                    ],
                    "inferno" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["inferno"] ?? null;
                        }
                    ],
                    "mirage" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["mirage"] ?? null;
                        }
                    ],
                    "vertigo" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["vertigo"] ?? null;
                        }
                    ],
                    "overpass" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["overpass"] ?? null;
                        }
                    ],
                    "nuke" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["nuke"] ?? null;
                        }
                    ],
                    "acient" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["acient"] ?? null;
                        }
                    ],
                    "undefined" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["undefined"] ?? null;
                        }
                    ],
                ]
            ]),
            "resolve" => function ($rootValue) {
                return $rootValue["map_stats"] ?? null;
            }
        ],
        "time_achieved" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["time_achieved"] ?? null;
            }
        ],
        "region" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["region"] ?? null;
            }
        ],
    ],
]);
