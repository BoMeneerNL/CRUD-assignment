<?php
include_once 'secureit.php';
//This file is intended to get userdata from all databases
//The user used is "usrh" usrh has the following rights: ALL. END on the tables: ALL. END
?>

<?php
    function login($logintype){
        return match ($logintype){
        "intern" => "jeff" //gdbname("login_int"),
    };
    }


?>
