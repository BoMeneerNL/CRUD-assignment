<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpbg/sql-pdo/secureit.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/langhandler.php";
function form()
{
    if (isset($_SESSION['email'])) {
        if($_GET['cnum'] >= 1 && $_GET['cnum'] <= 10){

        }
        $dblogin = gdbname();
        $dbdata = explode(";", $dblogin);
        $email = base64_encode($_SESSION['email']);
        $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        switch ($_GET['cnum']) {

            case 0:
                $stmt = $conn->prepare("UPDATE userdat SET ranked=1 WHERE Email = :email");
                $stmt->bindParam(':email', $email);
                break;
            case 1:
                var_dump($_POST);
                $stmt = $conn->prepare("UPDATE userdat SET Email=:input WHERE Email = :email");
                $stmt->bindParam(':email', $email);
                break;

        }
        $input = base64_encode($_POST['input']);
        if($_GET['cnum'] >= 1 && isset($_POST['input'])){ $stmt->bindParam(":input",$input); }
        try {
            $tstr = checkexistence("emailchange",$_POST['input']);
            if($tstr == "empty"){
                if(filter_var($_POST['input'], FILTER_VALIDATE_EMAIL)){
                    $stmt->execute();
                    session_destroy();
                    header("location: account");
                }
                else{
                    echo ("<p>Oops, your new email is not vailid you can try again from the account panel</p>");
                }
            }
            else{
                echo("<p>This email is already taken</p>");
            }

        }
        catch (PDOException){
            echo("<p>Oops, the given input is already taken</p>");
        }

    } else {
        echo("
            <br/><p>Error: Oops, could not find: 'Email.session', try logging in before re-doing this action </p><br/>
            <p>You will be redirected in about 5 seconds to 'account' or 'login'</p>
");
        sleep(5);
    }
}

if (isset($_GET['cnum'])) {
    form();
} else {
    echo("Oops, cnum is not set");
}
