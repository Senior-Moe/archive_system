<?php
$access_database = [
    'host' => 'localhost',
    'user' => 'root',
    'passwd' => 'Mummy4321',
    'dbase' => 'wftutorials'
];

$connection = new mysqli($access_database['host'], $access_database['user'], $access_database['passwd'], $access_database['dbase']);

if($connection->connect_error){
    die($connection->connect_error);
}
