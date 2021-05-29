<?php
include_once 'secureit.php';
//This file is intended to get userdata from all databases
//The user used is "usrh" usrh has the following rights: ALL. END on the tables: ALL. END
function checkemailexistence($occation): string
{
    switch ($occation){
        case "regcheck":
            $dblogin = gdbname("checkusername");
            $dbdata = explode(";",$dblogin);
            $email = $_SESSION['reg_email'];
            //B64DB Sanitizer
            $email = base64_encode($email);
            $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $conn->prepare('SELECT * FROM users WHERE Email = :email');
            $query->bindParam(':email', $email);
            $query->execute();
            $conn = null;
            if($query->rowCount() > 0){
                return "DAE";
            }
            else{
                return "empty";
            }
    }
}
    function checkusernameexistence($occation): string
    {
        switch ($occation){
            case "regcheck":
                $dblogin = gdbname("checkusername");
                $dbdata = explode(";",$dblogin);
                $username = $_SESSION['reg_username'];
                $username = base64_encode($username);
                $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare('SELECT * FROM users WHERE Username = :username');
                $query->bindParam(':username', $username);
                $query->execute();
                $conn = null;
                if($query->rowCount() > 0){
                    return "DAE";
                }
                else{
                    return "empty";
                }
        }
}