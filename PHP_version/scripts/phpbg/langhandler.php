<?php
if (isset($_COOKIE['cookieaccepted']) && $_COOKIE['cookieaccepted'] == "yes") {
    if (!isset($_GET['lang']) && !isset($_COOKIE['choosenlanguage'])) {
        setcookie("choosenlanguage", "en", time() + (86400 * 365));
    } else if (isset($_COOKIE['choosenlanguage']) && isset($_GET['lang'])) {
        header("location: index?serve=" . $_GET['serve']);
    }

    if (isset($_GET['lang'])) {
        if ($_GET['lang'] != $_COOKIE['choosenlanguage']) {
            if ($_GET['lang'] == "nl" || "en") {
                setcookie("choosenlanguage", $_GET['lang'], time() + (86400 * 365));
            } else {
                setcookie("choosenlanguage", "en", time() + (86400 * 365));
            }
        }
        if (isset($_GET['serve'])) {
            header("location: index?serve=" . $_GET['serve']);
        } else if (basename($_SERVER['SCRIPT_NAME'], '.php') == "register") {
            if (isset($_GET['step'])) {
                header("location: register?step=" . $_GET['step']);
            } else {
                header("location: register?step=1");
            }
        } else if (basename($_SERVER['SCRIPT_NAME'], '.php') == "login") {
            if (isset($_GET['loc'])) {
                header("location: login?loc=" . $_GET['loc']);
            } else {
                header("location: login");
            }
        } else if (basename($_SERVER['SCRIPT_NAME'], ".php") == "account") {
            header("location: account");
        }
    }
} else {
    include_once "scripts/phpstatic/acceptcookies.php";
}