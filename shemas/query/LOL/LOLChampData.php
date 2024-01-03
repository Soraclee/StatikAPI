<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$shemaLOLChampData = new ObjectType([
    "name" => "LOLChampData",
    "fields" => [
        "id" => [
            "type" => Type::int(),
            "resolve" => function ($rootValue) {
                return $rootValue["id"];
            }
        ],
        "keyChamp" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["key"];
            }
        ],
        "icon" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["icon"];
            }
        ],
        "names" => [
            "type" => new ObjectType([
                "name" => "LOLChampData_Names",
                "fields" => [
                    "name" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["name"];
                        }
                    ],
                    "fullName" => [
                        "type" => Type::string(),
                        "resolve" => function ($rootValue) {
                            return $rootValue["fullName"];
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
                return $rootValue["title"];
            }
        ],
        "resourceType" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["resource"];
            }
        ],
        "stats" => [
            "type" => new ObjectType([
                "name" => "LOLChampData_Stats",
                "fields" => [
                    "health" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_Health",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["health"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["health"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["health"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["health"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "healthRegen" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_HealthRegen",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["healthRegen"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["healthRegen"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["healthRegen"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["healthRegen"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "mana" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_Mana",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["mana"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["mana"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["mana"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["mana"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "manaRegen" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_ManaRegen",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["manaRegen"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["manaRegen"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["manaRegen"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["manaRegen"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "armor" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_Armor",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["armor"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["armor"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["armor"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["armor"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "magicResist" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_MagicResist",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["magicResist"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["magicResist"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["magicResist"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["magicResist"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackDamage" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackDamage",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDamage"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDamage"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDamage"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDamage"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackSpeed" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackSpeed",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeed"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeed"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeed"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeed"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackSpeedRatio" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackSpeedRatio",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeedRatio"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeedRatio"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeedRatio"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackSpeedRatio"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackCastTime" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackCastTime",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackCastTime"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackCastTime"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackCastTime"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackCastTime"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackTotalTime" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackTotalTime",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackTotalTime"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackTotalTime"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackTotalTime"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackTotalTime"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackDelayOffset" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackDelayOffset",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackDelayOffset" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackDelayOffset",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackDelayOffset"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "attackRange" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AttackRange",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackRange"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackRange"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackRange"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["attackRange"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "aramDamageTaken" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AramDamageTaken",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageTaken"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageTaken"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageTaken"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageTaken"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "aramDamageDealt" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AramDamageDealt",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageDealt"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageDealt"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageDealt"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramDamageDealt"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "aramHealing" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AramHealing",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramHealing"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramHealing"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramHealing"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramHealing"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "aramShielding" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_AramShielding",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramShielding"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramShielding"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramShielding"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["aramShielding"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "urfDamageTaken" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_UrfDamageTaken",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageTaken"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageTaken"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageTaken"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageTaken"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "urfDamageDealt" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_UrfDamageDealt",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageDealt"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageDealt"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageDealt"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfDamageDealt"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "urfHealing" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_UrfHealing",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfHealing"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfHealing"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfHealing"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfHealing"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                    "urfShielding" => [
                        "type" => new ObjectType([
                            "name" => "LOLChampData_Stats_UrfShielding",
                            "fields" => [
                                "flat" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfShielding"]["flat"];
                                    }
                                ],
                                "percent" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfShielding"]["percent"];
                                    }
                                ],
                                "perLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfShielding"]["perLevel"];
                                    }
                                ],
                                "percentPerLevel" => [
                                    "type" => Type::float(),
                                    "resolve" => function ($rootValue) {
                                        return $rootValue["stats"]["urfShielding"]["percentPerLevel"];
                                    }
                                ]
                            ]
                        ]),
                        "resolve" => function ($rootValue) {
                            return $rootValue;
                        }
                    ],
                ]
            ]),
            "resolve" => function ($rootValue) {
                return $rootValue;
            }
        ],
        "roles" => [
            "type" => Type::listOf(Type::string()),
            "resolve" => function ($rootValue) {
                return $rootValue["roles"];
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
                return $rootValue;
            }
        ],
        "lore" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["lore"];
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
                return $rootValue["skins"];
            }
        ],
        "releaseDate" => [
            "type" => Type::string(),
            "resolve" => function ($rootValue) {
                return $rootValue["releaseDate"];
            }
        ],
    ],
]);
