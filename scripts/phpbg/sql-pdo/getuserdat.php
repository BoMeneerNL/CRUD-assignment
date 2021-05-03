<?php
include_once 'secureit.php';
//This file is intended to get userdata from all databases
//The user used is "usrh" usrh has the following rights: ALL. END on the tables: ALL. END
?>

<?php
    function login($logintype){
        switch ($logintype){
            case "intern":
                $dbc = gdbname("login_int");
                $databaseaccount = explode(";",$dbc);
                $jeff = 0;
                while($jeff <= 3){
                    echo $databaseaccount[$jeff];
                    echo('<br>');
                    $jeff++;
                }
                break;
    }
    }


?>
