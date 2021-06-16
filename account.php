<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/langhandler.php";
if(isset($_GET['exit']) && $_GET['exit'] == "yes"){
    session_destroy();
    header("location: login");
}
if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['loggedin']) {
    $ipsc = IPSC();
    $userdat= MyAcIn();
    //$firstCharacter = substr($userdat[/*add for later:Username array ""*/], 0, 1);
    match($userdat["ranked"]){
        "0" => $rankname = "Not selected",
        "1" => $rankname = "Intern",
        "2" => $rankname = "Educator",
        "3" => $rankname = "Organization employee or volunteer",
        "4" => $rankname = "Education instituition account",
        "5" => $rankname = "Organization account",
        "6" => $rankname = "Admin"
    };
    if ($ipsc = 1) {
        echo('
        <div id="bgh" class="h-screen w-screen bg-gray-200 p-5">
            <p class="text-xl font-semibold">My Account ('.base64_decode($userdat["Username"]).'):</p>
            <div class="grid grid-cols-1 divide-y-2 divide-blue-200">
            <div>
                <p class="text-lg pb-2">Account Type Data:</p>
                <p>UserID: '.$userdat["UNID"].'</p>
                <p>Type Account: '.$rankname.'</p>
            </div>
            <div>
                <p class="text-lg pb-2">Account/Login details:</p>
                <p>'.langkit("email_address").': '.base64_decode($userdat['Email']).'</p>
            
            
            
            </div>
            
            
            
            </div>
            
            <p></p>
            <button onclick="redr()" class="border mt-2 rounded p-2 bg-ijp-1">Logout</button>
        </div>
');
        include_once "scripts/phpstatic/underscr.php";
    } else {
        header("location: login");
    }
} else {
    header("location: login");
}