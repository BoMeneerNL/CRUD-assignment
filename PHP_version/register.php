<?php
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpbg/langhandler.php";
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/arrayvars.php";
function prel_reg_1($bcn): string
{
    if (isset($_COOKIE['errorc'])) {
        if ($bcn == 1) {
            return $_COOKIE['errorc'] == "nve" || $_COOKIE['errorc'] == "edae" ? "ijp-3" : "ijp-2";
        }
        elseif ($bcn == 2) {
            return $_COOKIE['errorc'] == "udae" ? "ijp-3" : "ijp-2";
        }
        elseif ($bcn == 3) {
            return $_COOKIE['errorc'] == "pts" ? "ijp-3" : "ijp-2";
        }
    } else {
        return "ijp-2";
    }
}

if (isset($_GET['step'])) {
    switch ($_GET['step']) {
        case 1:
            $bordercolour_1 = prel_reg_1(1);
            $bordercolour_2 = prel_reg_1(2);
            $bordercolour_3 = prel_reg_1(3);
            if (isset($_COOKIE['errorc'])) {
                switch ($_COOKIE['errorc']) {
                    case "nve":
                        echo('<p class="m-4 border rounded border-ijp-3">Oops, your email is not valid, try again</p>');
                        break;
                    case "edae":
                        echo('<p class="m-4 border rounded border-ijp-3">Oops, This email is already used, try another email address</p>');
                        break;
                    case "udae":
                        echo('<p class="m-4 border rounded border-ijp-3">Oops, This username is already used, try another username</p>');
                        break;
                    case "pts":
                        echo('<p class="m-4 border rounded border-ijp-3">Oops, Your password is to short try to have at least 9 characters</p>');
                        break;
                    case "ptl":
                        echo('<p class="m-4 border rounded border-ijp-3">Oops, Your password is to long (the max is 50, you have typed '.strlen($_POST['reg_password']).' characters</p>');
                        break;

                }
            }
            echo('
                <div class="justify-center flex pt-3 md:pt-5">
                    <div class="max-w-md xl:max-w-xl w-full space-y-8">
                        <div>
                            <img class="mx-auto" width="100" height="93" src="assets/img/IJPv3p3.svg" alt="Workflow">
                            <h2 class="text-center text-xl font-extrabold text-gray-900"> ' .
                langkit("registering_step_header") . '
                            </h2>
                        </div>
                        <form class="mt-6 space-y-4" action="register?step=1validate" method="post">
                            <input type="hidden" name="remember" value="true">
                            <div class="rounded-md shadow-sm py-2">
                                <div class="py-0.5">
                                    <label for="email" class="sr-only">' . langkit("email_address") . '</label>
                                    <input id="email" name="email" type="email" required
                                        class="rounded relative block w-full px-3 py-2 border border-' . $bordercolour_1 . ' placeholder-gray-500 text-gray-900 focus:outline-none focus:z-10 text-sm rounded-md"
                                        placeholder="' . langkit("email_address") . '">
                                </div>
                                <div class="py-0.5">
                                    <label for="username" class="sr-only">Username</label>
                                    <input id="username" name="username" type="text" required
                                        class="rounded relative block w-full px-3 py-2 border border-' . $bordercolour_2 . ' placeholder-gray-500 text-gray-900 focus:outline-none text-sm rounded-md"
                                        placeholder="' . langkit("username") . '">
                                </div>
                                <div class="py-0.5">
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" name="password" type="password" autocomplete="current-password" required
                                        class="rounded relative block w-full px-3 py-2 border border-' . $bordercolour_3 . ' placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:z-10 text-sm"
                                        placeholder="' . langkit("password") . '">
                                </div>
                            </div>
                            <div>
                                <button type="submit" id="loginbutton"
                                    class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">' . langkit("goto_next_step") . '
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                ');
            break;
        case "1validate":
            setcookie("errorc", "", time() - 3600000000);
            $error = false;
            if (isset($_POST["username"]) && isset($_POST['email']) && isset($_POST['password'])) {
                echo('Validating... Please wait');
                $_SESSION['reg_email'] = $_POST['email'];
                $_SESSION['reg_username'] = $_POST['username'];
                if (strlen($_POST['password']) <= 8 || strlen($_POST['password']) >= 50) {
                    $error = true;
                    if(strlen($_POST['password']) <= 8){
                        setcookie("errorc","pts");
                    }
                    else{
                        setcookie("errorc","ptl");
                    }
                }
                $_SESSION['reg_password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if (filter_var($_SESSION['reg_email'], FILTER_VALIDATE_EMAIL)) {
                    $error = false;
                } else {
                    setcookie('errorc', "nve");
                    $error = true;
                }
                $echeck = checkexistence("email",null);
                if ($echeck == "DAE" && $error == false) {
                    setcookie("errorc", "edae");
                    $error = true;
                }
                $ucheck = checkexistence("username",null);
                if ($ucheck == "DAE" && $error == false) {
                    setcookie("errorc", "udae");
                    $error = true;
                }
            } else {
                echo('<p>Oops, something went wrong. Go back to <a href="index">"mainpage"</a> or <a href="register?step=2">"register (step 2)"?</a></p>');
            }
            if ($error == false && isset($_SESSION["reg_email"]) && isset($_SESSION["reg_username"]) && isset($_SESSION["reg_password"])) {
                header("location: register?step=2");
                if (!isset($_COOKIE['selecco'])) {
                    setcookie("selecco", "Afghanistan");
                }
            } else {
                header("location: register?step=1");
            }
            break;
        case 2:
            include_once "scripts/phpstatic/oopsinprogress.php";
            echo('
                <div class="justify-center flex pt-3 md:pt-5">
                    <div class="sm:max-w-sm md:max-w-md xl:max-w-xl w-full space-y-8">
                        <div>
                            <img class="mx-auto" width="100" height="93" src="assets/img/IJPv3p3.svg" alt="Workflow">
                            <h2 class="text-center text-xl font-extrabold text-gray-900"> '
                . langkit("registering_step_header") . '
                            </h2>
                            <h2 class="text-center text-l font-extrabold text-gray-900"> 
                            Current living address
                            </h2>
                            
                            
                        </div>
                        <!--<form class="mt-6 space-y-4" action="register?step=2validate" method="post">-->
                            <select id="country" name="country" class="rounded-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:z-10 sm:text-sm">
                               ' . countryout($country_nl, $country_en, $country_flags) . '
                            </select>
                            <select id="region" name="region" class="rounded-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:z-10 sm:text-sm">
                            ' . areaout($country_nl, $country_en, $areas) . '
                            </select>
                            
                            <button type="submit" id="loginbutton"
                            class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">' . langkit("goto_next_step") . '
                            </button>
                        </div>
                    <!--</form>-->
                </div>
            ');
            break;
        case "2validate":
            //header("register?step=2");
            //$_SESSION['reg_country'] = $_POST['country'];
            //$_SESSION['reg_region'] = $_POST['region'];
            //$_SESSION['reg_city'] = $_POST['city'];
            //$_SESSION['reg_postalcode'] = $_POST['postalcode'];
            //$_SESSION['reg_streetaddress'] = $_POST['streetaddress'];
            //$gothru = step2check($country_nl,$areas);
            //echo $gothru;
            //if($gothru){
            //    header("location: register?step=3");
            //}
            //else{
            //    header("location: register?step=2");
            //}
            break;
        case 3:
            echo('
            <div class="justify-center flex pt-3 md:pt-5">
                    <div class="sm:max-w-sm md:max-w-md xl:max-w-xl w-full space-y-8">
                        <div>
                            <img class="mx-auto" width="100" height="93" src="assets/img/IJPv3p3.svg" alt="Workflow">
                            <h2 class="text-center text-xl font-extrabold text-gray-900"> '
                . langkit("registering_step_header") . '
                            </h2>
                            <h2 class="text-center text-l font-extrabold text-gray-900"> 
                            Personal details
                            </h2>
                            
                            
                        </div>
                        <form class="mt-6 space-y-4" action="register?step=3validate" method="post">
                            <div class="py-0.5">
                                    <label for="firstname" class="sr-only">'. langkit("givenname") .'</label>
                                    <input id="firstname" name="firstname" type="text" required
                                        class="rounded relative block w-full px-3 py-2 border  placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:z-10 text-sm"
                                        placeholder="' . langkit("givenname") . '">
                                </div>
                            <div class="py-0.5">
                                    <label for="password" class="sr-only">' . langkit("familyname") . '</label>
                                    <input id="lastname" name="lastname" type="text" autocomplete="current-password" required
                                        class="rounded relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:z-10 text-sm"
                                        placeholder="' . langkit("familyname") . '">
                                </div>
                            
                            <button type="submit" id="loginbutton"
                            class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">' . langkit("goto_next_step") . '
                            </button>
                        </div>
                    </form>
                </div>
            ');
            break;
        case "3validate":
            $_SESSION['reg_firstname'] = $_POST['firstname'];
            $_SESSION['reg_lastname'] = $_POST['lastname'];
            header("location: register?step=finalize");
            break;
        case "finalize":
            include_once "scripts/phpbg/sql-pdo/registerinject.php";
            break;
        default:
            echo('<p>Oops, something gone wrong :(<br/>Error: stp_loc=nullif</p>');
    }
} else {
    header("location: register?step=1");
}
echo('
        <script src="scripts/js/cookies-yum.js"></script>
        <script src="scripts/js/min.main.js"></script>
    </body>
</html>
');