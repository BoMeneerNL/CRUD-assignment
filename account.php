<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/langhandler.php";
if (isset($_GET['exit']) && $_GET['exit'] == "yes") {
    session_destroy();
    header("location: login");
}
if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['loggedin']) {
    $ipsc = IPSC();
    $userdat = MyAcIn();
    $middlename = $userdat["Middle_Names"];
    if($middlename != null){

    }
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
    if(isset($_GET['chshow']) && $_GET['chshow'] == "ask0"){
        echo('
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            '.langkit("title_ask_getinta").'
                        </h3>
                        <div class="mt-2">
                        <p class="text-sm font-semibold">'.langkit("usure").'</p><br/>
                            <p class="text-sm text-gray-500">
                                '.langkit("desc_ask_getinta").'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <a href="changedat?cnum=0">
                <button type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-ijp-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    '.langkit("yes").'
                </button>
            </a>
            <a href="account">
                <button type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-ijp-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    '.langkit("no").'
                </button>
                </a>
            </div>
        </div>
    </div>
</div>
        ');
    }else if(isset($_GET['chshow']) && $_GET['chshow'] == "ask1"){
        echo('
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            '.langkit("title_ask_echange").'
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                '.langkit("desc_ask_echange").'
                            </p>
                            <form id="newemail" action="changedat?cnum=1" method="post">
                            <input name="input" class=" mt-2 border border-ijp-4 rounded" placeholder="'.langkit("new_email").'" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <a href="changedat?cnum=1">
                <button type="submit" form="newemail"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-ijp-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    '.langkit("yes").'
                </button>
            </a>
            <a href="account">
                <button type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-ijp-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    '.langkit("no").'
                </button>
                </a>
            </div>
        </div>
    </div>
</div>
        ');
    }else if(isset($_GET['chshow']) && $_GET['chshow'] == "ask2"){
        echo('
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            '.langkit("title_ask_uchange").'
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                '.langkit("desc_ask_uchange").'
                            </p>
                            <form id="newemail" action="changedat?cnum=1" method="post">
                            <input name="input" class=" mt-2 border border-ijp-4 rounded" placeholder="'.langkit("new_username").'" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <a href="changedat?cnum=1">
                <button type="submit" form="newusername"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-ijp-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    '.langkit("yes").'
                </button>
            </a>
            <a href="account">
                <button type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:border-ijp-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    '.langkit("no").'
                </button>
                </a>
            </div>
        </div>
    </div>
</div>
        ');
    }
        echo('
        <div id="bgh" class="h-screen w-screen bg-gray-200 ">
    <div id="nav">
        <div class="my-2">
        
        </div>
    </div>
    <div>
        <p class="text-xl font-semibold">My Account (' . base64_decode($userdat["Username"]) . '):</p>
        <div class="grid grid-cols-1 divide-y-2 divide-blue-200">
            <div>
                <p class="pb-2">' . langkit("header_myacc_1") . ':</p>
                <p>UserID: ' . $userdat["UNID"] . '</p>
                ');

        echo('
                <p>Type Account: ' . $rankname . '<a href="account?chshow=ask0" class="text-ijp-2 p-4">Change</a></p>
            </div>
            <div>
                <p class="pb-2">' . langkit("header_myacc_2") . ':</p>
                <p>' . langkit("email_address") . ': ' . base64_decode($userdat['Email']) . '<a href="account?chshow=ask1" class="text-ijp-2 p-4">Change</a></p>
                <p>' . langkit("username") . ': ' . base64_decode($userdat['Username']) . '<a href="account?chshow=ask2" class="text-ijp-2 p-4">Change</a></p>
                <p>' . langkit("password") . ': ' . $passdot . '</p>


            </div>
            <div>
                <p class="pb-2">' . langkit("header_myacc_3") . ':</p>
                <p>' . langkit("givenname") . ': ' . base64_decode($userdat["First_Name"]) . '</p>
                <p>'.$middlename.'</p>
                <p>' . langkit("familyname") . ': ' . base64_decode($userdat["Surname"]) . '</p>
                <p></p>
            </div>

        </div>
    </div>
    <button onclick="redr(0)" class="border w-auto h-auto mt-2 rounded p-2 bg-ijp-1">Logout</button>
</div>
');
        include_once "scripts/phpstatic/underscr.php";
    } else {
        header("location: login");
    }
} else {
    header("location: login");
}