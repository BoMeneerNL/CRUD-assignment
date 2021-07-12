<?php
include_once "scripts/phpbg/sql-pdo/secureit.php";
$gothru = true;
if (isset($_SESSION['reg_username'])) {
    $username = base64_encode($_SESSION['reg_username']);
} else {
    $username = null;
}

if (isset($_SESSION['reg_email'])) {
    $email = base64_encode($_SESSION['reg_email']);
} else {
    $email = null;
    $gothru = false;
}

if (isset($_SESSION['reg_password']) && $gothru) {
    $password = base64_encode($_SESSION['reg_password']);
} else {
    $password = null;
    $gothru = false;
}
if (isset($_SESSION['reg_firstname']) && $gothru) {
    $firstname = base64_encode($_SESSION['reg_firstname']);
} else {
    $firstname = null;
    $gothru = false;
}

if (isset($_SESSION['reg_middlename'])) {
    $middlename = base64_encode($_SESSION['reg_middlename']);
} else {
    $middlename = null;
}

if (isset($_SESSION['reg_lastname'])) {
    $lastname = base64_encode($_SESSION['reg_lastname']);
} else {
    $lastname = null;
    $gothru = false;
}
if (isset($_SESSION['dateofbirth'])) {
    $dateofbirth = base64_encode($_SESSION['dateofbirth']);
} else {
    $dateofbirth = null;
}
if (isset($_SESSION['phonenumber'])) {
    $phonenumber = base64_encode($_SESSION['phonenumber']);
} else {
    $phonenumber = null;
}
if (isset($_SESSION['reg_country']) && $gothru) {
    $country = base64_encode($_SESSION['reg_country']);
} else {
    $country = null;
}

if (isset($_SESSION['reg_region']) && $gothru) {
    $region = base64_encode($_SESSION['reg_region']);
} else {
    $region = null;
}

if (isset($_SESSION['reg_city']) && $gothru) {
    $city = base64_encode($_SESSION['reg_city']);
} else {
    $city = null;
}

if (isset($_SESSION['reg_postalcode']) && $gothru) {
    $postalcode = base64_encode($_SESSION['reg_postalcode']);
} else {
    $postalcode = null;
}

if (isset($_SESSION['reg_streetaddress']) && $gothru) {
    $streetaddress = base64_encode($_SESSION['reg_streetaddress']);
} else {
    $streetaddress = null;
}
if (isset($_SESSION['reg_website']) && $gothru) {
    $website = base64_encode($_SESSION['reg_website']);
} else {
    $website = null;
}

if ($gothru) {
    echo('
        <p>Please wait... adding your account to the database...</p>
    ');
    $dblogin = gdbname();
    $dbdata = explode(";", $dblogin);
    $conn = new PDO("mysql:host=$dbdata[0];dbname=$dbdata[1]", $dbdata[2], $dbdata[3]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO `userdat` (`UNID`, `ranked`, `Username`, `Email`, `Password`, `First_Name`, `Middle_Names`, `Surname`, `Date_of_Birth`, `Phone_Number`, `Country`, `region`, `Postal_Code`, `Street_Name_and_Number`, `Website`, `JID`) VALUES (NULL, '0', :username, :email, :password, :firstname, :middlename, :lastname, :dateofbirth, :phonenumber, :contry, :region, :postalcode, :streetaddress, :website, '')");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':middlename', $middlename);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':dateofbirth', $dateofbirth);
    $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':contry', $country);
    $stmt->bindParam(':region', $region);
    $stmt->bindParam(':postalcode', $postalcode);
    $stmt->bindParam(':streetaddress', $streetaddress);
    $stmt->bindParam(':website', $website);
    $stmt->execute();
    $conn = null;
    session_unset();
    header("Location: login");
} else {
    echo('<p>Oops, something(s) went wrong:</p><br/>');
    if (!isset($email) || $email == null) {
        echo(' <p>Could not get a valid email variable (Error_Email_Null_Selector)</p><br/>');
    }
    if (!isset($password) || $password == null) {
        echo(' <p>Could not get a valid password variable (Error_Password_Null_Selector)</p><br/>');
    }
    if (!isset($firstname) || $firstname == null) {
        echo(' <p>Could not get a valid Firstname variable (Error_Firstname_Null_Selector)</p><br/>');
    }
    if (!isset($lastname) || $lastname == null) {
        echo(' <p>Could not get a valid Surname variable (Error_Surname_Null_Selector)</p><br/>');
    }
}