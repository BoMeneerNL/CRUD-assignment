<?php
include_once "scripts/phpbg/sql-pdo/secureit.php";
$gothru = true;
if (isset($_SESSION['reg_username'])) {
    $username = base64_encode($_SESSION['reg_username']);
} else {
    $username = null;
    $gothru = false;
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
$middlename = $_SESSION['reg_middlename'] ?: null;

if (isset($_SESSION['reg_lastname'])) {
    $lastname = base64_encode($_SESSION['reg_lastname']);
} else {
    $lastname = null;
    $gothru = false;
}

$dateofbirth = $_SESSION['dateofbirth'] ?: null;
$phonenumber = $_SESSION['phonenumber'] ?: null;
$country = $_SESSION['reg_country'] ?: null;
$region = $_SESSION['reg_region'] ?: null;
$city = $_SESSION['reg_city'] ?: null;
$postalcode = $_SESSION['reg_postalcode'] ?: null;
$streetaddress = $_SESSION['reg_streetaddress'] ?: null;
$website = $_SESSION['reg_website'] ?: null;
$postalcode = $_SESSION['reg_postalcode'] ?: null;

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
    $email = $email == null ? "<p>Could not get a valid email variable (Error_Email_Null_Selector)</p><br/>" : "";
    $password = $password == null ? "<p>Could not get a valid password variable (Error_Password_Null_Selector)</p><br/>" : "";
    $firstname = $firstname == null ? "<p>Could not get a valid Firstname variable (Error_Firstname_Null_Selector)</p><br/>" : "";
    $lastname = $lastname == null ? "<p>Could not get a valid Surname variable (Error_Surname_Null_Selector)</p><br/>" : "";
}