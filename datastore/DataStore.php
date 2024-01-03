<?php
include_once("utils/connexionDB.php");

date_default_timezone_set("Europe/Paris");

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;

class DataStore
{
    public static $conn;
    public static $api;

    public static function initializeAPI()
    {
        self::$api = new LeagueAPI([
            LeagueAPI::SET_KEY    => 'RGAPI-f7d2ad9e-c36e-4de3-9dff-d37a31ae90cb',
            LeagueAPI::SET_REGION => Region::EUROPE_WEST,
        ]);
    }

    public static function searchChampionExist($name)
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

    public static function getInfoChampionByName($name)
    {
        $championExist = self::searchChampionExist($name);
        $keyChamp = $championExist["keyChamp"];
        $urlChamp = "https://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/champions/" . $keyChamp . ".json";
        $getChampInfo = requestHTTP($urlChamp, "GET");
        $infoChamp = json_decode($getChampInfo, true);
        // $allInfoChampArray = [
        //     "idChamp" => $infoChamp["id"],
        //     "keyChamp" => $infoChamp["key"],
        //     "name" => $infoChamp["name"],
        //     "fullName" => $infoChamp["fullName"],
        //     "title" => $infoChamp["title"],
        //     "icon" => $infoChamp["icon"],
        //     "resourceType" => $infoChamp["resource"],
        //     "releaseDate" => $infoChamp["releaseDate"]
        // ];
        return $infoChamp;
    }

    public static function getPUUIDRiotIDByName($name)
    {
        $summoner = self::$api->getSummonerByName($name);
        return $summoner->puuid;
    }
}

DataStore::$conn = new PDO("mysql:host=$servername;dbname=anemy_statik", $username, $password);
