<?php
include_once "scripts/phpbg/sql-pdo/secureit.php";
function injector()
{
    $gothru = true;
    if (isset($_SESSION['reg_username'])) { $username = base64_encode($_SESSION['reg_username']); }
    else{ $username = null; }

    if (isset($_SESSION['reg_email'])) { $email = base64_encode($_SESSION['reg_email']); }
    else{
        $email = null;
        $gothru = false;
    }

    if (isset($_SESSION['reg_password']) && $gothru) { $password = base64_encode($_SESSION['reg_password']); }
    else{
        $password = null;
        $gothru = false;
    }
    if(isset($_SESSION['reg_firstname'])){ $firstname = $_SESSION['reg_firstname'];}
    else{ $firstname = null; }

    if(isset($_SESSION['reg_middlename'])){ $middlename = $_SESSION['reg_middlename']; }
    else{ $middlename = null; }

    if(isset($_SESSION['reg_lastname'])){ $lastname = $_SESSION['reg_lastname']; }
    else{ $lastname = null; }

    if (isset($_SESSION['reg_country']) && $gothru) { $country = base64_encode($_SESSION['reg_country']); }
    else{ $country = null; }

    if (isset($_SESSION['reg_region']) && $gothru) { $region = base64_encode($_SESSION['reg_region']); }
    else{ $region = null; }

    if (isset($_SESSION['reg_city']) && $gothru) { $city = base64_encode($_SESSION['reg_city']); }
    else{ $city = null; }

    if (isset($_SESSION['reg_postalcode']) && $gothru) { $postalcode = base64_encode($_SESSION['reg_postalcode']); }
    else{ $postalcode = null; }

    if (isset($_SESSION['reg_street']) && $gothru) { $street = base64_encode($_SESSION['reg_street']); }
    else{ $street = null; }

    /*if(isset()){  }
    if(isset()){  }
    if(isset()){  }
    if(isset()){  }
    if(isset()){  }
    if(isset()){  }
    if(isset()){  }
    if(isset()){  }*/
    if($gothru){
        echo('
            <p>Please wait... adding your account to the database...</p>
        ');
        $dblogin = gdbname();
        $dbdata = explode(";", $dblogin);
        $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO `users` (`UNID`, `ranked`, `Username`, `Email`, `Password`, `First_Name`, `Middle_Names`, `Surname`, `Date_of_Birth`, `Phone_Number`, `Country`, `region`, `Postal_Code`, `Street_Name_and_Number`, `Ent_or_Edu_Name`, `Website`, `JID`, `Date_Of_Closing`) VALUES (NULL, '0', :username, :email, :password, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '')");
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
    }
    else{
        if(!isset($email) || $email == null){
            echo('
                <p>Oops, something went wrong:<br/>Could not get a vailid email variable (Error_Email_Null_Selector</p>
            ');
        }
    }

}