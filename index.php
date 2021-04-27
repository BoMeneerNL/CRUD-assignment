<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php //This file only contains loader, no page data (exception of title) is handled or added on this page
session_start();
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
    switch ($_GET['serve']) {
        case "welcome":
            include_once "scripts/phpstatic/welcome.php";
            break;
        case "login_internship":
        case "login":
            include_once "scripts/phpstatic/int.login.php";
            break;
        case "login_educator":
            include_once "scripts/phpstatic/edu.login.php";
            break;
        case "login_company":
            include_once "scripts/phpstatic/comp.login.php";
            break;
        case "":
        default:
            $_SESSION['email'] = $_POST['email'];
            $_POST['email'] = null;
            header("location: index?serve=welcome");
    }
}
else if($_GET['lang'] != "en"){
    $_SESSION['serve'] = $_GET['serve'];
    switch ($_GET['lang']){
        case "nl":
        case "de":
            setcookie("choosenlanguage",$_GET['lang'],time() + (86400 * 365));
            header("location: index?serve=" . $_SESSION['serve']);
            break;
        default:
            echo('');
    }
}
else{
    switch ($_GET['action']){
        case "checklogin":

    }
}
?>
