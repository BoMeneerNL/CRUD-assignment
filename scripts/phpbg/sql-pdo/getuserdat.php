<?php
include_once 'secureit.php';
//This file is intended to get userdata from all databases
//The user used is "usrh" usrh has the following rights: ALL. END on the tables: ALL. END

    function checkusernameexistence($username, $occation){
        switch ($occation){
            case "regcheck":
                $dblogin = gdbname("checkusername");
                $dbdata = explode($dblogin,";");
                $_GET['dbl'] == "000";
                break;
        }


    }