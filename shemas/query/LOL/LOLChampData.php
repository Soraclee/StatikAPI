<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$shemaLOLChampData = new ObjectType([
    "name" => "LOLChampData",
    "fields" => [
        "id" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["id"];
            }
        ],
        "keyChamp" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["key"];
            }
        ],
        "icon" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return "https://cdn.anemy.fr/statik/icons/champions/" . $rootValue["infosChamp"]["id"] . "/icon.png";
            }
        ],
        "names" => [
            "type" => new ObjectType([
                "name" => "LOLChampData_Names",
                "fields" => [
                    "name" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["infosChamp"]["name"];
                        }
                    ],
                    "fullName" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["infosChamp"]["fullName"];
                        }
                    ]
                ]
            ]),
            "resolve" => function ($rootValue) {
                return $rootValue;
            }
        ],
        "title" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["title"];
            }
        ],
        "resourceType" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["resource"];
            }
        ],
        "stats" => [
            "type" => new ObjectType([
                "name" => "LOLChampData_Stats",
                "fields" => [
                    "health" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["health"] ?? null;
                        }
                    ],

                    "healthRegen" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["healthRegen"] ?? null;
                        }
                    ],
                    "mana" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["mana"] ?? null;
                        }
                    ],
                    "manaRegen" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["manaRegen"] ?? null;
                        }
                    ],
                    "armor" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["armor"] ?? null;
                        }
                    ],
                    "magicResistance" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["magicResistance"] ?? null;
                        }
                    ],
                    "attackDamage" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackDamage"] ?? null;
                        }
                    ],
                    "attackSpeed" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackSpeed"] ?? null;
                        }
                    ],
                    "attackSpeedRatio" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackSpeedRatio"] ?? null;
                        }
                    ],
                    "attackCastTime" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackCastTime"] ?? null;
                        }
                    ],
                    "attackTotalTime" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackTotalTime"] ?? null;
                        }
                    ],
                    "attackDelayOffset" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackDelayOffset"] ?? null;
                        }
                    ],
                    "attackRange" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["attackRange"] ?? null;
                        }
                    ],
                    "aramDamageTaken" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["aramDamageTaken"] ?? null;
                        }
                    ],
                    "aramDamageDealt" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["aramDamageDealt"] ?? null;
                        }
                    ],
                    "aramHealing" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["aramHealing"] ?? null;
                        }
                    ],
                    "aramShielding" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["aramShielding"] ?? null;
                        }
                    ],
                    "urfDamageTaken" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["urfDamageTaken"] ?? null;
                        }
                    ],
                    "urfDamageDealt" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["urfDamageDealt"] ?? null;
                        }
                    ],
                    "urfHealing" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["urfHealing"] ?? null;
                        }
                    ],
                    "urfShielding" => [
                        "type" => $shemaLOLChampData_Stats,
                        "resolve" => function ($rootValue) {
                            return $rootValue["urfShielding"] ?? null;
                        }
                    ],
                ]
            ]),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["stats"];
            }
        ],
        "roles" => [
            "type" => Type::listOf(Type::string()),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["roles"];
            }
        ],
        "abilities" => [
            "type" => new ObjectType([
                "name" => "LOLChampData_Abilities",
                "fields" => [
                    "P" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Abilities_P",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "name";
                                    }
                                ],
                                "icon" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "icon.png";
                                    }
                                ],
                                "videoAbility" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "video.com";
                                    }
                                ],
                                "description" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "description";
                                    }
                                ],
                                "stats" => [
                                    "type" => new ObjectType([
                                        "name" => "LOLChampData_Abilities_P_Stats",
                                        "fields" => [
                                            "damage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "damage";
                                                }
                                            ],
                                            "cooldown" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cooldown";
                                                }
                                            ],
                                            "cost" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cost";
                                                }
                                            ],
                                            "range" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "range";
                                                }
                                            ],
                                            "movespeed" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "movespeed";
                                                }
                                            ],
                                            "duration" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "duration";
                                                }
                                            ],
                                            "baseDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "baseDamage";
                                                }
                                            ],
                                            "maxDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "maxDamage";
                                                }
                                            ],
                                        ]
                                    ]),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ]
                            ]
                        ])
                    ],
                    "Q" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Abilities_Q",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "name";
                                    }
                                ],
                                "icon" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "icon.png";
                                    }
                                ],
                                "videoAbility" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "video.com";
                                    }
                                ],
                                "description" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "description";
                                    }
                                ],
                                "stats" => [
                                    "type" => new ObjectType([
                                        "name" => "LOLChampData_Abilities_Q_Stats",
                                        "fields" => [
                                            "damage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "damage";
                                                }
                                            ],
                                            "cooldown" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cooldown";
                                                }
                                            ],
                                            "cost" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cost";
                                                }
                                            ],
                                            "range" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "range";
                                                }
                                            ],
                                            "movespeed" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "movespeed";
                                                }
                                            ],
                                            "duration" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "duration";
                                                }
                                            ],
                                            "baseDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "baseDamage";
                                                }
                                            ],
                                            "maxDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "maxDamage";
                                                }
                                            ],
                                        ]
                                    ]),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ]
                            ]
                        ])
                    ],
                    "W" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Abilities_W",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "name";
                                    }
                                ],
                                "icon" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "icon.png";
                                    }
                                ],
                                "videoAbility" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "video.com";
                                    }
                                ],
                                "description" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "description";
                                    }
                                ],
                                "stats" => [
                                    "type" => new ObjectType([
                                        "name" => "LOLChampData_Abilities_W_Stats",
                                        "fields" => [
                                            "damage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "damage";
                                                }
                                            ],
                                            "cooldown" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cooldown";
                                                }
                                            ],
                                            "cost" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cost";
                                                }
                                            ],
                                            "range" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "range";
                                                }
                                            ],
                                            "movespeed" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "movespeed";
                                                }
                                            ],
                                            "duration" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "duration";
                                                }
                                            ],
                                            "baseDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "baseDamage";
                                                }
                                            ],
                                            "maxDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "maxDamage";
                                                }
                                            ],
                                        ]
                                    ]),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ]
                            ]
                        ])
                    ],
                    "E" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Abilities_E",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "name";
                                    }
                                ],
                                "icon" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "icon.png";
                                    }
                                ],
                                "videoAbility" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "video.com";
                                    }
                                ],
                                "description" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "description";
                                    }
                                ],
                                "stats" => [
                                    "type" => new ObjectType([
                                        "name" => "LOLChampData_Abilities_E_Stats",
                                        "fields" => [
                                            "damage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "damage";
                                                }
                                            ],
                                            "cooldown" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cooldown";
                                                }
                                            ],
                                            "cost" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cost";
                                                }
                                            ],
                                            "range" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "range";
                                                }
                                            ],
                                            "movespeed" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "movespeed";
                                                }
                                            ],
                                            "duration" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "duration";
                                                }
                                            ],
                                            "baseDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "baseDamage";
                                                }
                                            ],
                                            "maxDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "maxDamage";
                                                }
                                            ],
                                        ]
                                    ]),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ]
                            ]
                        ])
                    ],
                    "R" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Abilities_R",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "name";
                                    }
                                ],
                                "icon" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "icon.png";
                                    }
                                ],
                                "videoAbility" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "video.com";
                                    }
                                ],
                                "description" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return "description";
                                    }
                                ],
                                "stats" => [
                                    "type" => new ObjectType([
                                        "name" => "LOLChampData_Abilities_R_Stats",
                                        "fields" => [
                                            "damage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "damage";
                                                }
                                            ],
                                            "cooldown" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cooldown";
                                                }
                                            ],
                                            "cost" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "cost";
                                                }
                                            ],
                                            "range" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "range";
                                                }
                                            ],
                                            "movespeed" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "movespeed";
                                                }
                                            ],
                                            "duration" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "duration";
                                                }
                                            ],
                                            "baseDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "baseDamage";
                                                }
                                            ],
                                            "maxDamage" => [
                                                "type" => Type::string(),
                                                "resolve" => function ($rootValue) {
                                                    return "maxDamage";
                                                }
                                            ],
                                        ]
                                    ]),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ]
                            ]
                        ])
                    ]
                ]
            ]),
            "resolve" => function ($rootValue) {
                return $rootValue;
            }
        ],
        "price" => [
            "type" => new ObjectType([
                "name" => "LOLChampData_Price",
                "fields" => [
                    "blueEssence" => [
                        "type" => Type::int(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["price"]["blueEssence"];
                        }
                    ],
                    "rp" => [
                        "type" => Type::int(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["price"]["rp"];
                        }
                    ]
                ]
            ]),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"];
            }
        ],
        "lore" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["lore"];
            }
        ],
        "builds" => [
            "type" => Type::listOf(new ObjectType([
                "name" => "LOLChampData_Builds",
                "fields" => [
                    "name" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["name"];
                        }
                    ],
                    "gamesUsed" => [
                        "type" => Type::int(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["gamesUsed"];
                        }
                    ],
                    "winRate" => [
                        "type" => Type::float(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["winRate"];
                        }
                    ],
                    "role" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["role"];
                        }
                    ],
                    "coreItems" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Builds_CoreItems",
                            "fields" => [
                                "itemsIds" => [
                                    "type" => Type::listOf(Type::int()),
                                    "resolve" => function ($rootValue) {
                                        $itemsIds = [];
                                        if ($rootValue) {
                                            foreach ($rootValue as $r) {
                                                $itemsIds[] = $r["idItem"];
                                            }
                                        }
                                        return $itemsIds;
                                    }
                                ],
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            if ($rootValue["coreItems"]) {
                                return $rootValue["coreItems"];
                            } else {
                                return null;
                            }
                        }
                    ],
                    "pathItems" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Builds_PathItems",
                            "fields" => [
                                "itemsIds" => [
                                    "type" => Type::listOf(Type::int()),
                                    "resolve" => function ($rootValue) {
                                        $itemsIds = [];
                                        if ($rootValue) {
                                            foreach ($rootValue as $r) {
                                                $itemsIds[] = $r["idItem"];
                                            }
                                        }
                                        return $itemsIds;
                                    }
                                ],
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            if ($rootValue["pathItems"]) {
                                return $rootValue["pathItems"];
                            } else {
                                return null;
                            }
                        }
                    ],
                    "skillOrders" => [
                        "type" => Type::listOf(Type::int()),
                        "resolve" => function ($rootValue) {
                            $skillOrders = [];
                            if ($rootValue["skillOrders"]) {
                                foreach ($rootValue["skillOrders"] as $r) {
                                    $skillOrders[] = $r["ability"];
                                }
                            }
                            if (!empty($skillOrders)) {
                                return $skillOrders;
                            } else {
                                return null;
                            }
                        }
                    ],
                    "summonerSpells" => [
                        "type" => Type::listOf(new ObjectType([
                            "name" => "LOLChampData_Builds_SummonerSpells",
                            "fields" => [
                                "spell1" => [
                                    "type" => Type::int(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["spell1"];
                                    }
                                ],
                                "spell2" => [
                                    "type" => Type::int(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["spell2"];
                                    }
                                ],
                            ]
                        ])),
                        "resolve" => function ($rootValue) {
                            if ($rootValue["summonerSpells"]) {
                                return $rootValue["summonerSpells"];
                            } else {
                                return null;
                            }
                        }
                    ],
                ]
            ])),
            "resolve" => function ($rootValue) {
                return $rootValue["buildsChamp"];
            }
        ],
        "skins" => [
            "type" => Type::listOf(new ObjectType([
                "name" => "LOLChampData_Skins",
                "fields" => [
                    "id" => [
                        "type" => Type::int(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["id"];
                        }
                    ],
                    "name" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["name"];
                        }
                    ],
                    "isBase" => [
                        "type" => Type::boolean(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["isBase"];
                        }
                    ],
                    "availability" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["availability"];
                        }
                    ],
                    "formatName" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["formatName"];
                        }
                    ],
                    "lootEligible" => [
                        "type" => Type::boolean(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["lootEligible"];
                        }
                    ],
                    "price" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Skins_Price",
                            "fields" => [
                                "cost" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        if (!is_string($rootValue)) {
                                            return (string) $rootValue["cost"];
                                        }

                                        return $rootValue["cost"];
                                    }
                                ],
                                "sale" => [
                                    "type" => Type::int(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["sale"];
                                    }
                                ],
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return [
                                "cost" => $rootValue["cost"],
                                "sale" => $rootValue["sale"]
                            ];
                        }
                    ],
                    "lore" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["lore"];
                        }
                    ],
                    "chromas" => [
                        "type" => Type::listOf(new ObjectType([
                            "name" => "LOLChampData_Skins_Chromas",
                            "fields" => [
                                "id" => [
                                    "type" => Type::int(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["id"];
                                    }
                                ],
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["name"];
                                    }
                                ],
                                "chromaPath" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["chromaPath"];
                                    }
                                ],
                                "colors" => [
                                    "type" => Type::listOf(Type::string()),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["colors"];
                                    }
                                ],
                            ]
                        ])),
                        "resolve" => function ($rootValue) {
                            return $rootValue["chromas"];
                        }
                    ],
                    "imagesPath" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Skins_ImagesPath",
                            "fields" => [
                                "splashPath" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["splashPath"];
                                    }
                                ],
                                "uncenteredSplashPath" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["uncenteredSplashPath"];
                                    }
                                ],
                                "tilePath" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["tilePath"];
                                    }
                                ],
                                "loadScreenPath" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["loadScreenPath"];
                                    }
                                ],
                                "loadScreenVintagePath" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["loadScreenVintagePath"];
                                    }
                                ],
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return [
                                "splashPath" => $rootValue["splashPath"],
                                "uncenteredSplashPath" => $rootValue["uncenteredSplashPath"],
                                "tilePath" => $rootValue["tilePath"],
                                "loadScreenPath" => $rootValue["loadScreenPath"],
                                "loadScreenVintagePath" => $rootValue["loadScreenVintagePath"],
                            ];
                        }
                    ],
                    "effects" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Skins_Effects",
                            "fields" => [
                                "newEffects" => [
                                    "type" => Type::boolean(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["newEffects"];
                                    }
                                ],
                                "newAnimations" => [
                                    "type" => Type::boolean(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["newAnimations"];
                                    }
                                ],
                                "newRecall" => [
                                    "type" => Type::boolean(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["newRecall"];
                                    }
                                ],
                                "newVoice" => [
                                    "type" => Type::boolean(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["newVoice"];
                                    }
                                ],
                                "newQuotes" => [
                                    "type" => Type::boolean(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["newQuotes"];
                                    }
                                ],
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return [
                                "newEffects" => $rootValue["newEffects"],
                                "newAnimations" => $rootValue["newAnimations"],
                                "newRecall" => $rootValue["newRecall"],
                                "newVoice" => $rootValue["newVoice"],
                                "newQuotes" => $rootValue["newQuotes"],
                            ];
                        }
                    ],
                    "voiceActor" => [
                        "type" => Type::listOf(new ObjectType([
                            "name" => "LOLChampData_Skins_VoiceActor",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ],
                            ]
                        ])),
                        "resolve" => function ($rootValue) {
                            return $rootValue["voiceActor"];
                        }
                    ],
                    "splashArtist" => [
                        "type" => Type::listOf(new ObjectType([
                            "name" => "LOLChampData_Skins_splashArtist",
                            "fields" => [
                                "name" => [
                                    "type" => Type::string(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue;
                                    }
                                ],
                            ]
                        ])),
                        "resolve" => function ($rootValue) {
                            return $rootValue["splashArtist"];
                        }
                    ],
                    "releaseDate" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["release"];
                        }
                    ],
                ]
            ])),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["skins"];
            }
        ],
        "releaseDate" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["infosChamp"]["releaseDate"];
            }
        ],
    ],
]);
