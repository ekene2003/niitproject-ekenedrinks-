<?php
//difference between session and cookie?
if (!session_id())
    session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$hostName = "localhost";
$user = "root";
$pass = "";
$database = "ekenedrinks_database";
$db = new mysqli($hostName, $user, $pass, $database);
if ($db->connect_error)
    echo "Could not connect to database";

?> 