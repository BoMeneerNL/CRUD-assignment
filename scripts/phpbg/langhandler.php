<?php
if (isset($_COOKIE['cookieaccepted']) && $_COOKIE['cookieaccepted'] == "yes") {
    if (!isset($_GET['lang']) && !isset($_COOKIE['choosenlanguage'])) {
        setcookie("choosenlanguage", "en", time() + (86400 * 365));
    } else if (isset($_COOKIE['choosenlanguage']) && isset($_GET['lang'])) {
        header("location: index?serve=" . $_GET['serve']);
    }

    if (isset($_GET['lang'])) {
        if ($_GET['lang'] != $_COOKIE['choosenlanguage'])
            setcookie("choosenlanguage", $_GET['lang'] == "nl" || "en" ? $_GET['lang'] : "en", time() + (86400 * 365));

        if (isset($_GET['serve']))
            header("location: index?serve=" . $_GET['serve']);

        else if (basename($_SERVER['SCRIPT_NAME'], '.php') == "register")
            header("location: register?step=" . isset($_GET['step']) ? $_GET['step'] : 1);

        else if (basename($_SERVER['SCRIPT_NAME'], '.php') == "login")
            header("location: login" . isset($_GET["loc"]) ? "?loc=" . $_GET['loc'] : "");

        else if (basename($_SERVER['SCRIPT_NAME'], ".php") == "account")
            header("location: account");
    }
} else {
    include_once "scripts/phpstatic/acceptcookies.php";
}