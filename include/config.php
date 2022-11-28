<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);

$base = "http://localhost/bencana/";

#DATABASE
$db_server = "localhost:3308";
$db_user = "root";
$db_password = "";
$db_name = "bencana";
require("database.php");
require("function.php");
?>