<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("classes/DB.php");
include_once("classes/User.php");
include_once("classes/Comment.php");
include_once("classes/Validator.php");

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "guestbook");
define("CHARSET", "utf8");
define("SALT", "webDEVblog");
