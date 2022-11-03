<?php

#region library functions
define("WRATHYBOO_KEY", "12E14F3C39E05909822C0C23A2C12DDA");

function getLinkContent($url){
    
    return json_decode(file_get_contents($url), true);
}
function checkForValidSteamID($id){
    $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . WRATHYBOO_KEY . "&steamids=" . $id;
    $user = json_decode(file_get_contents($url), true);
    if (empty($user['response']['players'])){
        return False;
    }
    else return True;
    
}
function getPlayerSummaries($id, $isArray = true, $key = WRATHYBOO_KEY)
{
    //
    $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $key . "&steamids=" . $id;
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 403 Forbidden') {
        return false;
    }
    else {
        return json_decode(file_get_contents($url), $isArray);
    }
}

function getPlayerWishlist($id, $isArray = true) {
    $url = 'https://store.steampowered.com/wishlist/profiles/' . $id . '/wishlistdata/';
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 500 Internal Server Error') {
        return false;
    }
    else {
        return json_decode(file_get_contents($url), $isArray);
    }
}

function getPlayerLevel($id, $isArray = true, $key = WRATHYBOO_KEY){
    $url = "http://api.steampowered.com/IPlayerService/GetSteamLevel/v1/?key=" . $key . "&steamids=" . $id;
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 403 Forbidden') {
        return false;
    }
    else {
        return json_decode(file_get_contents($url), $isArray);
    }
}

function getOwnedGames($id, $key = WRATHYBOO_KEY)
{
    $url = 'http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=' . $key . '&steamid=' . $id . '&include_appinfo=1';
    $ownedGames = json_decode(file_get_contents($url), true);
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 403 Forbidden') {
        return false;
    }
    else {
        if (empty($ownedGames['response'])){
            return NULL;
        }
        else return $ownedGames;
    }
}

function getAppDetails($appid, $isArray = true, $currency = 'us'){
    $url = 'https://store.steampowered.com/api/appdetails?appids=' . $appid . '&l=en&cc=' .$currency;
    return json_decode(file_get_contents($url), $isArray);
}

function getAppBanner($id) {
    return 'https://cdn.cloudflare.steamstatic.com/steam/apps/' . $id . '/capsule_231x87.jpg';
}

function getFriendlist($id, $isArray = true, $key = WRATHYBOO_KEY)
{
    $url = 'http://api.steampowered.com/ISteamUser/GetFriendList/v0001/?key=' . $key . '&steamid=' . $id;
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 401 Unauthorized') {
        return false;
    }
    else {
        return json_decode(file_get_contents($url), $isArray);
    }
}

function getSteamApps()
{
    $url = "http://api.steampowered.com/ISteamApps/GetAppList/v0002/";
    return json_decode(file_get_contents($url), true);
}

function sortByName_Asc($array){
    $name = array_column($array, 'name');
    array_multisort($name, SORT_ASC, $array);
    return $array;
}
function sortByName_Desc($array){
    $name = array_column($array, 'name');
    array_multisort($name, SORT_DESC, $array);
    return $array;
}
function sortById_Asc($array){
    $id = array_column($array, 'id');
    array_multisort($id, SORT_ASC, $array);
    return $array;
}
function sortById_Desc($array){
    $id = array_column($array, 'id');
    array_multisort($id, SORT_DESC, $array);
    return $array;
}

function getPlayerStatus($value)
{
    switch ($value) {
        case 1:
            return "Online";

        case 2:
            return "Busy";

        case 3:
            return  "Away";

        case 4:
            return  "Snooze";

        case 5:
            return  "looking to trade";

        case 6:
            return  "looking to play";
        default:
            return "Offline";
    }
}
function backupData(){
    $url = json_decode(file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=12E14F3C39E05909822C0C23A2C12DDA&steamid=76561198857060587&format=json&include_played_free_games'),true);
    $app = array();
    foreach ($url['response']['games'] as $game){
        array_push($app, $game['appid']);
    }
    return $app;
}
#endregion

function cmp($a, $b)
{
    return strcmp($a["name"], $b["name"]);
}

function generateClientFilename($id, $extention)
{
    
    # code...
    // $name = $username . '_' . date('m-d-y') . $extention;
    return 'userID_' . $id . '_profile_' . '.' . $extention;
}

function getLastname($name)
{
    $parts = explode(" ", $name);
    if(count($parts) > 1) {
        return implode(" ", $parts);
    }
    else
    {
        return $name;
    }
}

function getFirstname($name)
{
    $parts = explode(" ", $name);
    if(count($parts) > 1) {
        return array_pop($parts);
    }
    else
    {
        return $lastname = " ";
    }
}