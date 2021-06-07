<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpstatic/ntse.header.php";
if(isset($_SESSION['email']) && isset($_SESSION['password'])){
    $ipsc = IPSC();
}
echo('
<img class="h-16 w-16 md:h-24 md:w-24 QHD:w-32 QHD:h-32 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
');