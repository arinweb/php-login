<?php
error_reporting(0);
try {
  $db = new PDO("mysql:host=localhost;dbname=appdb;charset=utf8", "root", "");
  
  //echo "DB Success";
}catch (PDOExpception $error) {
  echo $error->getMessage();
}

date_default_timezone_set("Europe/Istanbul");
ob_start();
session_start();
