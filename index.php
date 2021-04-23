
<?php //This file only contains loader, no page data (exception of title) is handled or added on this page
session_start();
echo('<!DOCTYPE html>');
?>
<?php
if(!isset($_GET['lang']) || !isset($_COOKIE['choosenlanguage'])){
    setcookie("choosenlanguage","en-gb");
}
?>
<?php
//serve worker
$titleconcat = "CRUD opdracht - " . $_GET["serve"];
echo('<title>'.$titleconcat.'</title>');
if(!isset($_GET['serve'])){
    header("location: index?serve=welcome");
}
else{

    switch ($_GET['serve']){
        case "welcome":
            include_once "scripts/phpstatic/welcome.php";
            break;
        case "login":
            include_once "scripts/phpstatic/login.php";
            break;
        default:
            header("location: index?serve=welcome");
    }
}
?>
