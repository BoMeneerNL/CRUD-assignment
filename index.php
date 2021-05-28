<?php
//This index file is only a linking file, no HTML included
session_start();
//Placeholder to prevent TailwindCSS purge taking away some elements
echo("<p class='gray-300 w-0 h-0 border-ijp-1 border-ijp-2 border-ijp-3 border-ijp-4 border-ijp-5 hover:bg-ijp-1 hover:bg-ijp-2 hover:bg-ijp-3 hover:bg-ijp-4 hover:bg-ijp-5 border-none focus:border-ijp-1 focus:border-ijp-2 focus:border-ijp-3 focus:border-ijp-4 focus:border-ijp-5 bg-ijp-1 bg-ijp-2 bg-ijp-3 bg-ijp-4 bg-ijp-5 text-ijp-1 text-ijp-2 text-ijp-3 text-ijp-4 text-ijp-5'>");
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