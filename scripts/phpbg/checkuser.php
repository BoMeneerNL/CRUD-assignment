<?php


if(isset($_POST['email'],$_POST['password'])){
    include_once "scripts/phpbg/sql-pdo/getuserdat.php";
    include_once "scripts/phpbg/sql-pdo/secureit.php";
    echo('
    <div id="loading">
        <p>loading login..</p>
    </div>
    ');
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_POST['email'] == null;
    $_POST['password'] == null;
    echo login(logintype: "intern");
    $sqlpass = null;
    if(!isset($sqlpass)){$sqlpass = 0;}
    if(password_verify($_SESSION['password'],$sqlpass)){

    }
    else{
        header("location: index?serve=error_401");
    }
}
else{
    error_reporting(E_ERROR | E_PARSE);
    header("location: index?serve=error_401");

}