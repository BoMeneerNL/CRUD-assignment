<?php
    include_once "scripts/phpbg/sql-pdo/getuserdat.php";
    include_once "scripts/phpbg/sql-pdo/secureit.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_POST['email'] == null;
    $_POST['password'] == null;

    echo login(logintype: "intern");

}
