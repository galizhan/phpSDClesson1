<?php
ob_start();
session_start();


define('DBHOST','localhost');
define('DBUSER','blogAdmin');
define('DBPASS','admin');
define('DBNAME','blog');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
date_default_timezone_set('Europe/London');
?>
