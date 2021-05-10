<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php
//This index file is only a linking file, no HTML included
session_start();
?>
<?php
function defgb($icallh){
    if($icallh == 0){
        $_SESSION['email'] = $_POST['email'];
        $_POST['email'] = null;
        header("location: index?serve=welcome");
    } else if($icallh == 1){
        setcookie("choosenlanguage",$_GET['lang'],time() + (86400 * 365));
    }
}
?>
<?php
if(!isset($_GET['lang'],$_COOKIE['choosenlanguage'])){
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
        "loginchecker" => include_once "scripts/phpbg/checkuser.php",
        "error_401" => include_once "scripts/phpstatic/errors/401.php",
        default => include_once "scripts/phpstatic/errors/404.php",
    };
}
else if($_GET['lang'] != "en"){
    $_SESSION['serve'] = $_GET['serve'];
    match ($_GET['lang']){
        "nl"/*,"de"*/,"en" => defgb(1),
    };
    header("location: index?serve=" . $_SESSION['serve']);
}
else if($_GET['lang'] == "en"){
    if($_COOKIE['choosenlanguage'] != "en"){
    setcookie("choosenlanguage",$_GET['lang'], time() + (86400 * 365));
    }
    header("location: index?serve=" . $_GET['serve']);
}
else{
    switch ($_GET['action']){
        case "checklogin":

    }
}