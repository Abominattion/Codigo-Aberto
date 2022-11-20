<?php

/** SITE CONFIG */
define("SITE", [
    "name"      => " Auth em MVC com PHP",
    "desc"      => "Aprenda a construir uma aplicação de autenticação em MVC com PHP",
    "domain"    => "",
    "locale"    => "pt-BR",
    "root"      => "http://localhost/Codigo-Aberto"
]);

/** SITE MINIFY */
if($_SERVER["SERVER_NAME"] == "localhost") {
   require __DIR__ . "/Minify.php"; 
}

/** DATABASE CONNECT */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/** SOCIAL CONFIG */
define("SOCIAL", [
    "facebook_page"     => "adonay.douglas.7",
    "facebook_author"   => "adonay.douglas.7",
    "facebook_appId"    => "442678420222805",
    "twitter_creator"   => "adonay.douglas.7",
    "twitter_site"      => "adonay.douglas.7",
]);

define("MAIL", [
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "",
    "mode" => "tls",
    "from_name" => "Adonay",
    "from_email" => "adonaypowermetal@gmail.com"
]);

/*
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", [
    "clientId" => "442678420222805",
    "clientSecret" => "a64eb3012f3d12977c23a6f3f797534e",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v4.0"
]);

/*
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", [
    "clientId" => "382709550183-u18live7d8oc400g2el41k201ls3keoa.apps.googleusercontent.com",
    "clientSecret" => "fAbl8cgbu5WoiHorhnQ2jfFf",
    "redirectUri" => SITE["root"] . "/google"
]);