<?php

header("Content-Type: application/json");
date_default_timezone_set("Asia/Kolkata");

define("VERSION","1.1");

define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","api");

$dbConnection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if(!$dbConnection){
    http_response_code(503);
    print(json_encode(array("responseCode" => "503", "responseData"=>"Failed to Connect to Database")));
    die();
}

function sanitise($string){
    $string = mysqli_real_escape_string($GLOBALS['dbConnection'],$string);
    $string = htmlentities($string);
    return $string;
}

?>