<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$titleconcat = "CRUD opdracht - " . basename($_SERVER['SCRIPT_NAME'], '.php');
if (isset($_COOKIE['choosenlanguage'])) {
    $lang = $_COOKIE['choosenlanguage'];
} else {
    $lang = "en";
}
if (basename($_SERVER['SCRIPT_NAME'], '.php') == "register") {
    $htmltag = '<html class = "bg-gray-50" lang="' . $lang . '">';
} else {
    $htmltag = '<html lang="' . $lang . '">';
}
echo('
<!DOCTYPE html>
' . $htmltag . '
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IJP">
        <link rel="stylesheet" href="scripts/css/tailwind.css">
        <title>' . $titleconcat . '</title>
    <body class="min-h-screen">
');