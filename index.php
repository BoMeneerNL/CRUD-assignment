<?php
//This index file is only a linking file, no HTML included
session_start();
include_once "scripts/phpbg/langhandler.php";
include_once "scripts/phpstatic/header.php";
//serve worker/ ServeHandler
match ($_GET['serve']) {
    "welcome" => include_once "scripts/phpstatic/welcome.php",
    "login" => include_once "scripts/phpstatic/hoster.login.php",
    "forgotpassword_intership" => include_once "scripts/phpstatic/forgotpassword.php",
    "loginchecker" => include_once "scripts/phpbg/checkuser.php",
    "error_401" => include_once "scripts/phpstatic/errors/401.php",
    "register" => header("Location: register?step=1"),
    default => include_once "scripts/phpstatic/errors/404.php",
    };