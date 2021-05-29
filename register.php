<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpbg/langhandler.php";
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langkit.php";
function prel_reg_1($bcn): string
{
if(isset($_COOKIE['errorc'])){
        if($bcn == 1){
            if($_COOKIE['errorc'] == "nve" || $_COOKIE['errorc'] == "edae"){
                return "ijp-3";
            }
            else{
                return "ijp-2";
            }
        }
        if($bcn == 2){
            if($_COOKIE['errorc'] == "udae"){
                return "ijp-3";
            }
            else{
                return "ijp-2";
            }
        }
        if($bcn == 3){
            if($_COOKIE['errorc'] == "pts"){
                return "ijp-3";
            }
            else{
                return "ijp-2";
            }
        }
    }
    else{
        return "ijp-2";
    }
}
if(isset($_GET['step'])){
    switch ($_GET['step']){
        case 1:
            $bordercolour_1 = prel_reg_1(1);
            $bordercolour_2 = prel_reg_1(2);
            $bordercolour_3 = prel_reg_1(3);
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
                            <div class="rounded-md shadow-sm py-2">
                                <div>
                                    <label for="email" class="sr-only">Email</label>
                                    <input id="email" name="email" type="email" required
                                        class="border focus:ring-'.$bordercolour_1.' focus:border-'.$bordercolour_1.' rounded-none relative block w-full px-3 py-2 border border-'.$bordercolour_1.' placeholder-gray-500 text-gray-900 focus:outline-none focus:z-10 text-sm rounded-md"
                                        placeholder="'.langkit("email_address").'">
                                </div>
                                <div class="py-1">
                                    <label for="username" class="sr-only">Username</label>
                                    <input id="username" name="username" type="text" required
                                        class="rounded-none relative block w-full px-3 py-2 border border-'.$bordercolour_2.' placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-'.$bordercolour_2.' focus:border-'.$bordercolour_2.' focus:z-10 text-sm rounded-md"
                                        placeholder="'.langkit("username").'">
                                </div>
                                <div>
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required
                                        class="rounded-none relative block w-full px-3 py-2 border border-'.$bordercolour_3.' placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:z-10 sm:text-sm"
                                        placeholder="'.langkit("password").'">
                                </div>
                            </div>
                            <div>
                                <button type="submit" id="loginbutton"
                                    class="focus:animate-spin relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">'.langkit("goto_next_step").'
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                ');
            break;
        case "1validate":
            setcookie("errorc","", time() - 3600000000);
            $error = false;
            if(isset($_POST["username"]) && isset($_POST['email']) && isset($_POST['password'])){
                echo('Validating... Please wait');
                $_SESSION['reg_email'] = $_POST['email'];
                $_SESSION['reg_username'] = $_POST['username'];
                $_SESSION['reg_password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if(filter_var($_SESSION['reg_email'], FILTER_VALIDATE_EMAIL)) {
                    $error = false;
                }
                else{
                    $error = true;
                    setcookie('errorc',"nve");
                }
                $echeck = checkemailexistence("regcheck");
                if($echeck == "DAE"&& $error == false){
                    setcookie("errorc","edae");
                    $error = true;
                }
                $ucheck = checkusernameexistence("regcheck");
                if($ucheck == "DAE" && $error == false){
                    setcookie("errorc","udae");
                    $error = true;
                }

            }
            else{
                echo('<p>Oops, something went wrong. Go back to <a href="index">"mainpage"</a> or <a href="register?step=1">"register (step 1)"?</a></p>');
            }
            if($error == false && isset($_SESSION["reg_email"]) && isset($_SESSION["reg_username"]) && isset($_SESSION["reg_password"])){
                header("location: register?step=2");
            }
            else{
                header("location: register?step=1");
            }
            break;
        default:
            header("location: register?step=1");
    }
}
else{
    header("location: register?step=1");
}
echo('
<script src="scripts/js/cookies-yum.js"></script>
<script src="scripts/js/min.main.js"></script>
</body>
</html>');
