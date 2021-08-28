<?php
session_start();
error_reporting(1 | 4);
$tcc = "CRUD opdracht - ";
$titleconcat = $tcc . basename($_SERVER['SCRIPT_NAME'], '.php') == "index" ? $_GET["site"] : basename($_SERVER['SCRIPT_NAME'], '.php');

function langaddr($lang)
{
    return match (basename($_SERVER['SCRIPT_NAME'], ".php")) {
        "index" => basename($_SERVER['SCRIPT_NAME'], ".php") . "?site=" . $_GET['site'] . "&lang=" . $lang,
        "register" => basename($_SERVER['SCRIPT_NAME'], ".php") . "?step=" . $_GET['step'] . "&lang=" . $lang,
        "changedat" => basename($_SERVER['SCRIPT_NAME'], ".php"),
        default => basename($_SERVER['SCRIPT_NAME'], ".php") . "?lang=" . $lang
    };
}

echo('
<!DOCTYPE html>
<html lang="' . $_COOKIE['choosenlanguage'] . '">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IJP">
        <link rel="stylesheet" href="scripts/css/tailwind.css">
        <title>' . $titleconcat . '</title>
    </head>
    <body class="h-screen">
        <div id="langgoto" class="float-right">
            <div id="langnl" class="my-4 mr-10">
                <a href="' . langaddr("nl") . '"><img src="assets/img/flags/nl.svg" alt="lang_nl_change" class="rounded" width="40"></a><br/>
                <a href="' . langaddr("en") . '"><img src="assets/img/flags/en.svg" alt="lang_en_change" class="rounded" width="40"></a>
            </div>
        </div>
');