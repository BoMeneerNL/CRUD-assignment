<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpbg/langhandler.php";
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langkit.php";
if(isset($_GET['step'])){
    switch ($_GET['step']){
        case 1:
            $bordercolour_1 = "ijp-2";
            $bordercolour_2 = "ijp-2";
            $bordercolour_3 = "ijp-2";
            if(isset($_SESSION['redo'])) {
                if ($_SESSION['redo'] == "y-redec") {
                    $bordercolour_1 = "ijp-3";
                    echo('
                    <p onload="ldr("killmail")"></p>
                    ');
                }
            }
            echo('
                <div class="justify-center flex pt-3">
                    <div class="max-w-md w-full space-y-8">
                        <div>
                            <img class="mx-auto" width="100" height="93" src="assets/img/IJP2.svg" alt="Workflow">
                            <h2 class="text-center text-xl font-extrabold text-gray-900"> ' .
                                langkit("registering_step_header") . '
                            </h2>
                        </div>
                        <form class="mt-6 space-y-4" action="register?step=1validate" method="post">
                            <input type="hidden" name="remember" value="true">
                            <div class="rounded-md shadow-sm -space-y-px">
                                <div>
                                    <label for="email" class="sr-only">Email</label>
                                    <input id="email" name="email" type="email" required
                                        class="rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-'.$bordercolour_1.' focus:border-'.$bordercolour_1.' focus:z-10 text-sm rounded-t-md"
                                        placeholder="'.langkit("email_address").'">
                                </div>
                                <div>
                                    <label for="username" class="sr-only">Username</label>
                                    <input id="username" name="username" type="text" required
                                        class="rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-'.$bordercolour_2.' focus:border-'.$bordercolour_2.' focus:z-10 text-sm"
                                        placeholder="'.langkit("username").'">
                                </div>
                                <div>
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required
                                        class="focus:ring-'.$bordercolour_3.' focus:border-'.$bordercolour_3.' rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:z-10 sm:text-sm"
                                        placeholder="'.langkit("password").'">
                                </div>
                            </div>
                            <div>
                                <button type="submit" id="loginbutton"
                                    class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">'.langkit("goto_next_step").'
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                ');
            break;
        case "1validate":
            if(isset($_POST["username"]) && isset($_POST['email']) && isset($_POST['password'])){
                echo('Validating... Please wait');
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $_POST['email'] == null;
                $_POST['username'] == null;
                $_POST['[password'] == null;
                if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['redo'] == "y-redec";
                    header("location: register?step=1");

                }

            }
            else{
                echo('<p>Oops, something went wrong. Go back to <a href="index">"mainpage"</a> or <a href="register?step=1">"register (step 1)"?</a></p>');
            }
            break;
    }
}
else{
    header("location: register?step=0");
}
echo('
<script src="scripts/js/cookies-yum.js"></script>
<script src="scripts/js/min.main.js"></script>
</body>
</html>');
