<?php
$titleconcat = "CRUD opdracht - " . $_GET["serve"];
echo('
<!DOCTYPE html>
<html lang="'.$_COOKIE['choosenlanguage'].'">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="scripts/css/tailwind.css">
        <title>'.$titleconcat.'</title>
');