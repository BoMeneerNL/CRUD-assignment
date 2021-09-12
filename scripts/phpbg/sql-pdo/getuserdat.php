<?php
include_once 'secureit.php';

function checkexistence($inputtype,$edat): string
{
    $dblogin = gdbname();
    $input = match($inputtype){
        "username" => base64_encode($_SESSION['reg_username']),
        "email" => base64_encode($_SESSION['reg_email']),
        "emailchange" => base64_encode($edat)
    };
    $conn = new PDO("mysql:host=$dblogin[0];dbname=$dblogin[1]", $dblogin[2], $dblogin[3]);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($inputtype == "username") {
        $query = $conn->prepare('SELECT * FROM userdat WHERE Username = :input');
    } else if ($inputtype == "email") {
        $query = $conn->prepare('SELECT * FROM userdat WHERE Email = :input');
    }
    else if($inputtype == "emailchange"){
        $query = $conn->prepare('SELECT * FROM userdat WHERE Email =:input');
    }
    $query->bindParam(':input', $edat);
    $query->execute();
    $conn = null;
    return $query->rowCount() > 0 ? "DAE" : "empty";
}
function IPSC(): int
{
    $dblogin = gdbname();
    $conn = new PDO("mysql:host=$dblogin[0];dbname=$dblogin[1]", $dblogin[2], $dblogin[3]);
    $email = $_SESSION['email'];
    $email = base64_encode($email);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare('SELECT * FROM userdat WHERE Email = :email');
    $query->bindParam(':email', $email);
    $query->execute();

    $result = $query->Fetch(PDO::FETCH_ASSOC);

    $conn = null;
    if ($query->rowCount() > 0) {
        if (isset($result['password'])) {
            $pcheck = base64_decode($result['password']);
            if (password_verify($_SESSION['password'], $pcheck)) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }

    } else {
        return 0;
    }
}

function logincheck()
{
    $dblogin = gdbname();
    $gothru = false;
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        try {
            $email = base64_encode($_SESSION['email']);
            $conn = new PDO("mysql:host=$dblogin[0];dbname=$dblogin[1]", $dblogin[2], $dblogin[3]);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT password FROM userdat WHERE Email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $result = $stmt->Fetch(PDO::FETCH_ASSOC);
            if (isset($result['password'])) {
                $pcheck = base64_decode($result['password']);

            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }

        if (isset($pcheck)) {
            if (password_verify($_SESSION['password'], $pcheck)) {
                $gothru = true;
            }
        }
    }
    if (!$gothru) {
        $_SESSION['email'] = null;
        $_SESSION['password'] = null;
        header("location: login");
    } else {
        $_SESSION['loggedin'] = true;
        header("location: account");
    }
}

function MyAcIn()
{
    $dblogin = gdbname();
    $email = base64_encode($_SESSION['email']);
    $conn = new PDO("mysql:host=$dblogin[0];dbname=$dblogin[1]", $dblogin[2], $dblogin[3]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM userdat WHERE Email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->Fetch(PDO::FETCH_ASSOC);
}
