<?php

$serverName = "localhost";
$dBUsername = "upgradpg1";
$dBPassword = "upgradpg1";
$dBName = "klik_database";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3307);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


