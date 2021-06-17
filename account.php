<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/langhandler.php";
if (isset($_GET['exit']) && $_GET['exit'] == "yes") {
    session_destroy();
    header("location: login");
}
if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['loggedin']) {
    $ipsc = IPSC();
    $userdat = MyAcIn();
    //$firstCharacter = substr($userdat[/*add for later:Username array ""*/], 0, 1);
    match ($userdat["ranked"]) {
        "0" => $rankname = "Not selected",
        "1" => $rankname = "Intern",
        "2" => $rankname = "Educator",
        "3" => $rankname = "Organization employee or volunteer",
        "4" => $rankname = "Education instituition account",
        "5" => $rankname = "Organization account",
        "6" => $rankname = "Admin"
    };
    $passdot = "";
    $passdotc = 0;
    $passdota = strlen(base64_encode($_SESSION['password']));
    //passdot
    while ($passdotc < $passdota) {
        $passdot = $passdot . "*";
        $passdotc++;
    }
    if ($ipsc = 1) {

        echo('
        <div id="bgh" class="h-screen w-screen bg-gray-200 ">
    <div id="nav">
        <div>
        
        </div>
    </div>
    <div>
        <p class="text-xl font-semibold">My Account (' . base64_decode($userdat["Username"]) . '):</p>
        <div class="grid grid-cols-1 divide-y-2 divide-blue-200">
            <div>
                <p class="pb-2">' . langkit("header_myacc_1") . ':</p>
                <p>UserID: ' . $userdat["UNID"] . '</p>
                <p>Type Account: ' . $rankname . '</p>
            </div>
            <div>
                <p class="pb-2">' . langkit("header_myacc_2") . ':</p>
                <p>' . langkit("email_address") . ': ' . base64_decode($userdat['Email']) . '</p>
                <p>' . langkit("username") . ': ' . base64_decode($userdat['Username']) . '</p>
                <p>' . langkit("password") . ': ' . $passdot . '</p>


            </div>
            <div>
                <p class="pb-2">' . langkit("header_myacc_3") . ':</p>
                <p>Voornaam: ' . $userdat[""] . '</p>
                <p></p>
                <p></p>
            </div>

        </div>
    </div>
    <button onclick="redr()" class="border w-auto h-auto mt-2 rounded p-2 bg-ijp-1">Logout</button>
</div>
');
        include_once "scripts/phpstatic/underscr.php";
    } else {
        header("location: login");
    }
} else {
    header("location: login");
}