<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'website');
define('DB_PASSWORD', 'website');
define('DB_NAME', 'friendbot');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("[ERROR]:" . mysqli_connect_error());
}
?>