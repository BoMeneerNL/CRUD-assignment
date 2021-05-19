<?php
$titleconcat = "CRUD opdracht - " . $_GET["serve"];
if (isset($_COOKIE['choosenlanguage'])) {
    $lang = $_COOKIE['choosenlanguage'];
} else {
    $lang = "en";
}
if ($_GET['serve'] == "login"){
    $htmltag = '<html class = "bg-gray-50" lang="'.$lang.'">';
}
else{
    $htmltag = '<html lang="'.$lang.'">';
}
echo('
<!DOCTYPE html>
'.$htmltag.'
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="JPI">
        <link rel="stylesheet" href="scripts/css/tailwind.css">
        <title>' . $titleconcat . '</title>
    </head>
    <body class="min-h-screen">
');