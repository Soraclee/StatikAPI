<?php
require_once __DIR__ . '/../vendor/autoload.php';
include_once("utils/connexionDB.php");

date_default_timezone_set("Europe/Paris");

$rootDir = __DIR__ . '/../';

$dotenv = Dotenv\Dotenv::createImmutable($rootDir);
$dotenv->load();

class DataStore
{
    public static $conn;

    // LOL Section

    public static function LOL_searchChampionExist($name)
    {
        $champName = htmlentities($name);
        $searchChampion = self::$conn->prepare("SELECT idChamp, keyChamp FROM LOL_Champion WHERE name LIKE CONCAT('%', :name, '%') OR keyChamp LIKE CONCAT('%', :name, '%') OR fullName LIKE CONCAT('%', :name, '%');");
        $searchChampion->bindParam(':name', $champName);
        $searchChampion->execute();
        $result = $searchChampion->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public static function LOL_getInfoChampionByName($name)
    {
        $championExist = self::LOL_searchChampionExist($name);
        $keyChamp = $championExist["keyChamp"];
        $urlChamp = "https://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/champions/" . $keyChamp . ".json";
        $getChampInfo = requestHTTP($urlChamp, "GET");
        $infoChamp = json_decode($getChampInfo, true);
        return $infoChamp;
    }

    public static function LOL_getBuildsChampionByIDChamp($IDChamp, $queue = "RANKED_SOLO_5X5", $rank = "EMERALD_PLUS")
    {
        if ($queue != "ALL") {
            $getBuild = self::$conn->prepare("SELECT * FROM LOL_Champion_Build WHERE championId = :championId AND queue = :queue AND rank = :rank;");
            $getBuild->bindParam(':championId', $IDChamp);
            $getBuild->bindParam(':queue', $queue);
            $getBuild->bindParam(':rank', $rank);
            $getBuild->execute();
        } else {
            $getBuild = self::$conn->prepare("SELECT * FROM LOL_Champion_Build WHERE championId = :championId;");
            $getBuild->bindParam(':championId', $IDChamp);
            $getBuild->execute();
        }

        // recupération du résultat
        $results = $getBuild->fetchAll(PDO::FETCH_ASSOC);

        $allData = [];

        foreach ($results as $result) {
            $result["coreItems"] = self::LOL_getCoreItemBuildChampionByIDBuild($result["id"]);
            $result["pathItems"] = self::LOL_getPathItemBuildChampionByIDBuild($result["id"]);
            $result["skillOrders"] = self::LOL_getSkillOrderBuildChampionByIDBuild($result["id"]);
            $result["summonerSpells"] = self::LOL_getSummonerSpellsBuildChampionByIDBuild($result["id"]);
            $allData[] = $result;
        }

        if ($allData) {
            return $allData;
        } else {
            return false;
        }
    }

    public static function LOL_getCoreItemBuildChampionByIDBuild($IDBuild)
    {
        $getCoreItemBuild = self::$conn->prepare("SELECT * FROM LOL_Champion_Build_CoreItem WHERE idBuild = :idBuild ORDER BY position ASC;");
        $getCoreItemBuild->bindParam(':idBuild', $IDBuild);
        $getCoreItemBuild->execute();
        $result = $getCoreItemBuild->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public static function LOL_getPathItemBuildChampionByIDBuild($IDBuild)
    {
        $getPathItemBuild = self::$conn->prepare("SELECT * FROM LOL_Champion_Build_PathItem WHERE idBuild = :idBuild ORDER BY position ASC;");
        $getPathItemBuild->bindParam(':idBuild', $IDBuild);
        $getPathItemBuild->execute();
        $result = $getPathItemBuild->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public static function LOL_getSkillOrderBuildChampionByIDBuild($IDBuild)
    {
        $getSkillOrderBuild = self::$conn->prepare("SELECT * FROM LOL_Champion_Build_SkillOrder WHERE idBuild = :idBuild ORDER BY position ASC;");
        $getSkillOrderBuild->bindParam(':idBuild', $IDBuild);
        $getSkillOrderBuild->execute();
        $result = $getSkillOrderBuild->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public static function LOL_getSummonerSpellsBuildChampionByIDBuild($IDBuild)
    {
        $getSummonerSpellsBuild = self::$conn->prepare("SELECT * FROM LOL_Champion_Build_SummonerSpells WHERE idBuild = :idBuild;");
        $getSummonerSpellsBuild->bindParam(':idBuild', $IDBuild);
        $getSummonerSpellsBuild->execute();
        $result = $getSummonerSpellsBuild->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    // CS2 Section

    public static function CS2_getSteamIDByName($name)
    {
        $urlApiXML = "http://steamcommunity.com/id/" . $name . "/?xml=1";

        $getXML = simplexml_load_file($urlApiXML);

        if ($getXML === false || $getXML->error) {
            $steamID = false;
        } else {
            $steamID = $getXML->steamID64;
        }

        return $steamID;
    }

    public static function CS2_getAllDataUserBySteamID($steamID)
    {
        $stats = self::CS2_getUserStatsBySteamID($steamID);
        $bans = self::CS2_getPlayerBansBySteamID($steamID);
        $infos = self::CS2_getPlayerSummariesBySteamID($steamID);

        $allData = [
            "steamID" => $steamID,
            "userInfos" => $infos,
            "bans" => $bans,
            "stats" => $stats
        ];

        return $allData;
    }

    public static function CS2_getPlayerSummariesBySteamID($steamID)
    {
        $urlApiSummaries = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v2/?key=" . $_ENV["KEY_API_STEAM"] . "&steamids=" . $steamID;

        $getSummariesCS2 = requestHTTP($urlApiSummaries, "GET");
        $parseSummaries = json_decode($getSummariesCS2, true);

        return $parseSummaries["response"]["players"][0];
    }

    public static function CS2_getPlayerBansBySteamID($steamID)
    {
        $urlApiBans = "https://api.steampowered.com/ISteamUser/GetPlayerBans/v1/?key=" . $_ENV["KEY_API_STEAM"] . "&steamids=" . $steamID;

        $getBansCS2 = requestHTTP($urlApiBans, "GET");
        $parseBans = json_decode($getBansCS2, true);

        return $parseBans["players"][0];
    }

    public static function CS2_getUserStatsBySteamID($steamID)
    {
        $urlApiStats = "https://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v2/?appid=730&key=" . $_ENV["KEY_API_STEAM"] . "&steamid=" . $steamID;

        $getStatsCS2 = requestHTTP($urlApiStats, "GET");
        $parseStats = json_decode($getStatsCS2, true);

        if (!isset($parseStats["playerstats"])) {
            return null;
        }

        return $parseStats["playerstats"]["stats"];
    }

    public static function CS2_getNumberOfCurrentPlayers()
    {
        $urlApiStats = "https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=730";

        $getStatsCS2 = requestHTTP($urlApiStats, "GET");
        $parseStats = json_decode($getStatsCS2, true);

        return $parseStats["response"]["player_count"];
    }

    public static function CS2_getLastNews($count = 1)
    {
        $urlApiNews = "https://api.steampowered.com/ISteamNews/GetNewsForApp/v2/?appid=730&count=" . $count . "&format=json";

        $getNewsCS2 = requestHTTP($urlApiNews, "GET");
        $parseNews = json_decode($getNewsCS2, true);

        return $parseNews["appnews"]["newsitems"];
    }

    public static function CS2_getAllRegionsAvailableLeaderboard()
    {
        $urlApiRegions = "https://explodingcamera.github.io/cs2leaderboard/data/meta.json";

        $getRegionsCS2 = requestHTTP($urlApiRegions, "GET");
        $parseRegions = json_decode($getRegionsCS2, true);

        $allRegions = [];

        foreach ($parseRegions["regions"] as $key => $value) {
            array_push($allRegions, $key);
        }

        return $allRegions;
    }

    public static function CS2_getAllSeasons()
    {
        $urlApiSeasons = "https://explodingcamera.github.io/cs2leaderboard/data/meta.json";

        $getSeasonsCS2 = requestHTTP($urlApiSeasons, "GET");
        $parseSeasons = json_decode($getSeasonsCS2, true);

        return $parseSeasons["seasons"];
    }

    public static function CS2_getLeaderboard($region = "global")
    {
        $urlApiLeaderboard = "https://explodingcamera.github.io/cs2leaderboard/data/latest/" . $region . ".json";

        $getLeaderboardCS2 = requestHTTP($urlApiLeaderboard, "GET");
        $parseLeaderboard = json_decode($getLeaderboardCS2, true);

        $urlApiGithub = "https://api.github.com/repos/explodingcamera/cs2leaderboard/deployments";

        $headers = array(
            'User-Agent: Statik',
        );

        $getGithub = requestHTTP($urlApiGithub, "GET", array(), $headers);
        $parseGithub = json_decode($getGithub, true);

        $githubLastUpdated = $parseGithub[0]["created_at"];

        return [
            "leaderboardLastUpdated" => $githubLastUpdated,
            "leaderboard" => $parseLeaderboard
        ];
    }
}

DataStore::$conn = new PDO("mysql:host=$servername;dbname=anemy_statik", $username, $password);
