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
                            $IDChamp = DataStore::LOL_searchChampionExist($args['name'])["idChamp"];
                            return $IDChamp;
                        }
                    ],
                    "getInfoChampByName" => [
                        "type" => $shemaLOLChampData,
                        "args" => [
                            "name" => Type::string()
                        ],
                        "resolve" => function ($root, $args) {
                            $infosChamp = DataStore::LOL_getInfoChampionByName($args['name']);
                            $buildsChamp = DataStore::LOL_getBuildsChampionByIDChamp($infosChamp["id"]);
                            $allData = [
                                "infosChamp" => $infosChamp,
                                "buildsChamp" => $buildsChamp
                            ];
                            return $allData;
                        }
                    ],
                ]
            ]),
            "resolve" => function ($root, $args) {
                return $root;
            }
        ],
        "CS2" => [
            "type" => new ObjectType([
                "name" => "CS2",
                "fields" => [
                    "getLastNews" => [
                        "type" => Type::listOf($shemaCS2NewsData),
                        "args" => [
                            "count" => Type::int()
                        ],
                        "resolve" => function ($root, $args) {
                            if (isset($args["count"])) {
                                $lastNews = DataStore::CS2_getLastNews($args["count"]);
                            } else {
                                $lastNews = DataStore::CS2_getLastNews();
                            }
                            return $lastNews;
                        }
                    ],
                    "getSteamIDByName" => [
                        "type" => Type::string(),
                        "args" => [
                            "name" => Type::string()
                        ],
                        "resolve" => function ($root, $args) {
                            if (isset($args["name"])) {
                                $steamID = DataStore::CS2_getSteamIDByName($args['name']);
                                return $steamID;
                            } else {
                                return error(1, "Un ou plusieurs argument(s) manquant(s)");
                            }
                        }
                    ],
                    "getNumberOfCurrentPlayers" => [
                        "type" => Type::int(),
                        "resolve" => function ($root, $args) {
                            $numberOfCurrentPlayers = DataStore::CS2_getNumberOfCurrentPlayers();
                            return $numberOfCurrentPlayers;
                        }
                    ],
                    "getAllDataPlayerBySteamID" => [
                        "type" => $shemaCS2PlayerData,
                        "args" => [
                            "steamID" => Type::string()
                        ],
                        "resolve" => function ($root, $args) {
                            if (isset($args["steamID"])) {
                                $allData = DataStore::CS2_getAllDataUserBySteamID($args["steamID"]);
                                return $allData;
                            } else {
                                return error(1, "Un ou plusieurs argument(s) manquant(s)");
                            }
                        }
                    ],
                    "getAllRegionsAvailableLeaderboard" => [
                        "type" => Type::listOf(Type::string()),
                        "resolve" => function ($root, $args) {
                            $allRegions = DataStore::CS2_getAllRegionsAvailableLeaderboard();

                            return $allRegions;
                        }
                    ],
                    "getAllSeasons" => [
                        "type" => Type::listOf(new ObjectType([
                            "name" => "CS2Seasons",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string()
                                ],
                                "start" => [
                                    "type" => Type::string()
                                ],
                            ]
                        ])),
                        "resolve" => function ($root, $args) {
                            $allSeasons = DataStore::CS2_getAllSeasons();

                            return $allSeasons;
                        }
                    ],
                    "getLeaderboard" => [
                        "type" => Type::listOf($shemaCS2Leaderboard),
                        "args" => [
                            "region" => Type::string(),
                        ],
                        "resolve" => function ($root, $args) {
                            $getAllRegionsAvailable = DataStore::CS2_getAllRegionsAvailableLeaderboard();

                            if (isset($args["region"])) {
                                if (in_array($args["region"], $getAllRegionsAvailable)) {
                                    $leaderboard = DataStore::CS2_getLeaderboard($args["region"]);
                                } else {
                                    return error(2, "La région demandée n'existe pas");
                                }
                            } else {
                                $leaderboard = DataStore::CS2_getLeaderboard();
                            }

                            return $leaderboard;
                        }
                    ],
                ]
            ]),
            "resolve" => function ($root, $args) {
                return $root;
            }
        ]
    ]
]);
