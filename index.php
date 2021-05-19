<?php error_reporting(E_ERROR | E_PARSE);
//This index file is only a linking file, no HTML included
session_start();

include_once "scripts/phpstatic/header.php";
if(isset($_COOKIE['cookieaccepted'])){
    if(!isset($_GET['lang']) && !isset($_COOKIE['choosenlanguage'])){
        setcookie("choosenlanguage","en", time() + (86400 * 365));
    }
    else if(isset($_COOKIE['choosenlanguage']) && isset($_GET['lang'])){
        header("location: index?serve=" . $_GET['serve']);
    }

    if(isset($_GET['lang'])) {
        if ($_GET['lang'] != $_COOKIE['choosenlanguage']) {
            if($_GET['lang'] == "nl" || "en"){
                setcookie("choosenlanguage", $_GET['lang'], time() + (86400 * 365));
            }
        }
        header("location: index?serve=" . $_GET['serve']);
    }
}
else{
    include_once "scripts/phpstatic/acceptcookies.php";
}

//serve worker/ ServeHandler
match ($_GET['serve']) {
    "welcome" => include_once "scripts/phpstatic/welcome.php",
    "login_internship" => include_once "scripts/phpstatic/int.login.php",
    "login_educator" => include_once "scripts/phpstatic/edu.login.php",
    "login_company" => include_once "scripts/phpstatic/comp.login.php",
    "login" => gtls(),
    "forgotpassword_intership" => include_once "scripts/phpstatic/forgotpassword.php",
    "loginchecker" => include_once "scripts/phpbg/checkuser.php",
    "error_401" => include_once "scripts/phpstatic/errors/401.php",
    default => include_once "scripts/phpstatic/errors/404.php",
    };

function gtls(){
    if(!isset($_SESSION['loginstack'])){
        include_once "scripts/phpstatic/int.login.php";
    }
    else{
        include_once "scripts/phpstatic/hoster.login.php";
    }
}