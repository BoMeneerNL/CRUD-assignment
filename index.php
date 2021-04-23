
<?php //This file only contains loader, no page data (exception of title) is handled or added on this page
session_start();
?>
<?php
//serve worker
$titleconcat = "CRUD opdracht - " . $_GET["serve"];
echo('<title>'.$titleconcat.'</title>');
if(!isset($_GET['serve'])){
    header("location: index?serve=welcome");
}
else{

    switch ($_GET['serve']){
        case "welcome":
            setcookie("nav",true);
            include_once "scripts/phpstatic/welcome.php";
            break;
        case "login":
            include_once "scripts/phpstatic/login.php";
            break;
        default:
            header("location: index?serve=welcome");
    }
}
?>
