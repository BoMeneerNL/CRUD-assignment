<?php
include_once 'secureit.php';
//This file is intended to get userdata from all databases
//The user used is "usrh" usrh has the following rights: ALL. END on the tables: ALL. END
    function checkusernameexistence($occation){
        switch ($occation){
            case "regcheck":
                $dblogin = gdbname("checkusername");
                echo ($dblogin) . "<br/>";
                $dbdata = explode(";",$dblogin);
                echo ($dbdata[0]);
                $username = $_POST['username'];
                $username = base64_encode($username);
                $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare('SELECT * FROM users WHERE username = :username');
                $query->bindParam(':username', $username);
                $query->execute();
                if($query->rowCount() == 0){
                    echo "Registered";
                } else {
                    echo "Username Taken";
                }
                $conn = null;
                break;
        }


    }