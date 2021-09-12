<?php
//This index file is only a linking file, no showed HTML included
include_once "scripts/phpbg/langhandler.php";
if (isset($_GET['site'])) {
    include_once "scripts/phpstatic/header.php";
} else {
    header("location: index?site=hp");
}
//Placeholder to prevent TailwindCSS purge taking away some elements
echo("<p class='gray-300 p-0 m-0 w-0 h-0 border-ijp-1 border-ijp-2 border-ijp-3 border-ijp-4 border-ijp-5 hover:bg-ijp-1 hover:bg-ijp-2 hover:bg-ijp-3 hover:bg-ijp-4 hover:bg-ijp-5 border-none focus:border-ijp-1 focus:border-ijp-2 focus:border-ijp-3 focus:border-ijp-4 focus:border-ijp-5 bg-ijp-1 bg-ijp-2 bg-ijp-3 bg-ijp-4 bg-ijp-5 text-ijp-1 text-ijp-2 text-ijp-3 text-ijp-4 text-ijp-5'>");
//serve worker/ServeHandler
match ($_GET['site']) {
    "hp" => include_once "scripts/phpstatic/welcome.php",
    "login" => header("Location: login"),
    "register" => header("Location: register?step=1"),
    default => include_once "scripts/phpstatic/errors/404.php",
};