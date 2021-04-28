<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php //This file only contains page loaders, no page data (exception of title) is handled or added on this page
session_start();
?>
<?php
//
function defgb($icallh){
    switch ($icallh){
        case 0:
            $_SESSION['email'] = $_POST['email'];
            $_POST['email'] = null;
            header("location: index?serve=welcome");
            break;
        case 1:
            setcookie("choosenlanguage",$_GET['lang'],time() + (86400 * 365));
            header("location: index?serve=" . $_SESSION['serve']);
            break;
    }
}
?>
<?php
if(!isset($_GET['lang']) && !isset($_COOKIE['choosenlanguage'])){
    setcookie("choosenlanguage","en", time() + (86400 * 365));
}
else{
    if($_GET['lang'] == "nl" || $_GET['lang'] == "de"){setcookie("choosenlanguage",$_GET['lang'], time() + (86400 * 365));}
}
?>
<?php
include_once "scripts/phpstatic/header.php";
//serve worker/ ServeHandler
if(!isset($_GET['lang'])) {
    match ($_GET['serve']) {
        "welcome" => include_once "scripts/phpstatic/welcome.php",
        "login_internship","login" => include_once "scripts/phpstatic/int.login.php",
	    "login_educator" => include_once "scripts/phpstatic/edu.login.php",
	    "login_company" => include_once "scripts/phpstatic/comp.login.php",
        "forgotpassword_intership" => include_once "scripts/phpstatic/forgotpassword.php",
        default => defgb(0),
    };
}
else if($_GET['lang'] != "en"){
    $_SESSION['serve'] = $_GET['serve'];
    match ($_GET['lang']){
        "nl","de" => defgb(1),
        default => null,
    };
}
else{
    switch ($_GET['action']){
        case "checklogin":

    }
}
?>
