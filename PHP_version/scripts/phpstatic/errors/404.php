<?php
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpstatic/header.php";
echo('
        <h3>' . langkit("errorheader_404") . '</h3>
        <p>oops, this (serve) address could not be found</p>
');
include_once "scripts/phpstatic/errors/404.php";
