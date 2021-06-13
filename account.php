<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpstatic/ntse.header.php";
if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['loggedin']) {
    $ipsc = IPSC();
    if ($ipsc = 1) {
        echo('
        <p class="">Hello</p>
        
        
        ');
    } else {
        header("location: login");
    }
} else {
    header("location: login");
}