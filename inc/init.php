<?php

// Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=shop','root','Afpa06130++', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

require_once("fonction.php");


$msg = "";

session_start();

define("URL", "http://" . $_SERVER["HTTP_HOST"] . "/11_onlineShop_project_static_version/");
define("SITE_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/11_onlineShop_project_static_version/");

?>