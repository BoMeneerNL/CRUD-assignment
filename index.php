
<?php //This file only contains loader, no page data (exception of title) is handled or added on this page
session_start();
?>
<?php
if(!isset($_GET['lang']) || !isset($_COOKIE['choosenlanguage'])){
    setcookie("choosenlanguage","en-gb", time() + (86400 * 365));
}
?>
<?php
include_once "scripts/phpstatic/header.php";
//serve worker
if(!isset($_GET['serve'])){
    header("location: index?serve=welcome");
}
else{

    switch ($_GET['serve']){
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
        default:
            header("location: index?serve=welcome");
    }
}
?>
