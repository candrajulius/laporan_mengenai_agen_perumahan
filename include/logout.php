<?php 
require("include/mainconfig.php");
session_start();
session_destroy();
header("Location:".$base."login.php");
 
?>