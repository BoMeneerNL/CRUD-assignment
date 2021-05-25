<?php
//This index file is only a linking file, no HTML included
session_start();
include_once "scripts/phpbg/langhandler.php";
if(isset($_GET['serve'])){
include_once "scripts/phpstatic/header.php";
}
else{
    header("location: index?serve=hp");
}
//serve worker/ ServeHandler
match ($_GET['serve']) {
    "hp" => include_once "scripts/phpstatic/welcome.php",
    "login" => header("Location: login"),
    "forgotpassword_intership" => include_once "scripts/phpstatic/forgotpassword.php",
    "loginchecker" => include_once "scripts/phpbg/checkuser.php",
    "error_401" => include_once "scripts/phpstatic/errors/401.php",
    "register" => header("Location: register?step=1"),
    default => include_once "scripts/phpstatic/errors/404.php",
    };