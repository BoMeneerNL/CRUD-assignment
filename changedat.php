<?php
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/langhandler.php";
function form()
{
    switch ($_GET['cnum']) {
        case 0:

            break;
    }
}

if (isset($_GET['cnum'])) {
    form();
}
else{
    echo("Oops, cnum is not set");
}
