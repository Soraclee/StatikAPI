<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;


$shemaCS2PlayerDataBans = new ObjectType([
    "name" => "CS2PlayerDataBans",
    "fields" => [
        "communityBanned" => [
            "type" => Type::boolean(),
            "resolve" => function ($rootValue) {
                return $rootValue["CommunityBanned"];
            }
        ],
        "VACBanned" => [
            "type" => Type::boolean(),
            "resolve" => function ($rootValue) {
                return $rootValue["VACBanned"];
            }
        ],
        "numberOfVACBans" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["NumberOfVACBans"];
            }
        ],
        "daysSinceLastBan" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["DaysSinceLastBan"];
            }
        ],
        "numberOfGameBans" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["NumberOfGameBans"];
            }
        ],
        "economyBan" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["EconomyBan"];
            }
        ],
    ],
]);
