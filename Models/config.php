<?php

define('DB_server','localhost');
define('DB_username','khangth');
define('DB_password','Password1!');
define('DB_name','OnlineStore');

$mysqli = new mysqli(DB_server,DB_username,DB_password,DB_name);

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>