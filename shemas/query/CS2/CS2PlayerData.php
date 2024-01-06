<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;


$shemaCS2PlayerData = new ObjectType([
    "name" => "CS2PlayerData",
    "fields" => [
        "steamID" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["steamid"];
            }
        ],
        "name" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["personaname"];
            }
        ],
        "avatar" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["avatar"];
            }
        ],
        "avatarMedium" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["avatarmedium"];
            }
        ],
        "avatarFull" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["avatarfull"];
            }
        ],
        "profileURL" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["profileurl"];
            }
        ],
        "lastLogOff" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["lastlogoff"] ?? null;
            }
        ],
        "personastate" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["personastate"] ?? null;
            }
        ],
        "primaryclanid" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["primaryclanid"] ?? null;
            }
        ],
        "timecreated" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["timecreated"] ?? null;
            }
        ],
        "personastateflags" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["personastateflags"] ?? null;
            }
        ],
        "loccountrycode" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["loccountrycode"] ?? null;
            }
        ],
        "profilestate" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["userInfos"]["profilestate"] ?? null;
            }
        ],
        "bans" => [
            "type" => $shemaCS2PlayerDataBans,
            "resolve" => function ($rootValue) {
                return $rootValue["bans"] ?? null;
            }
        ],
        "stats" => [
            "type" => Type::listOf($shemaCS2PlayerDataStats),
            "resolve" => function ($rootValue) {
                return $rootValue["stats"] ?? null;
            },
        ],
    ]
]);
