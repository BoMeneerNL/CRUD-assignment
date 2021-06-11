<?php
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langhandler.php";
include_once 'scripts/phpbg/langkit.php';
if ($_GET['loc'] == "check") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        include_once "scripts/phpbg/sql-pdo/getuserdat.php";
        include_once "scripts/phpbg/sql-pdo/secureit.php";
        echo('
        <p>loading login..</p>
    ');
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_POST['email'] = null;
        $_POST['password'] = null;
        logincheck();

    } else {
        echo("<p>" . langkit("Err_loading_usergdat") . "</p>");
    }

}
else if($_GET['loc'] == "forgotpassword"){
    echo("Oops, could not load ILoc/ForgotPassword/internals.site");
    echo('
        <div class="justify-center flex pt-3">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto" width="100" height="93" src="assets/img/IJPv3p3.svg" alt="Workflow">
            <h2 class="text-center text-xl font-extrabold text-gray-900"> ' .langkit("reqnp") . '</h2>
        </div>
        <form class="mt-6 space-y-4" action="login?loc=check" method="post">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" required
                        class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:border-ijp-2 focus:z-10 text-sm"
                        placeholder="'.langkit("email_address").'">
                </div>
            </div>
            <div>
                <button type="submit" id="loginbutton"
                    class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">' . langkit("reqnp") . '
                </button>
            </div>
        </form>
    </div>
</div>
');
}
else {
    echo('
<div class="justify-center flex pt-3">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto" width="100" height="93" src="assets/img/IJPv3p3.svg" alt="Workflow">
            <h2 class="text-center text-xl font-extrabold text-gray-900"> ' .langkit("login_header") . ' </h2>
        </div>
        <form class="mt-6 space-y-4" action="login?loc=check" method="post">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" required
                        class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:border-ijp-2 focus:z-10 text-sm"
                        placeholder="' . langkit("email_address") . '">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="' . langkit("password") . '">
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-sm">
                    <a href="login?loc=forgotpassword"
                        class="font-medium text-indigo-600 hover:text-indigo-900">
                        ' . langkit("forgot_password") . '
                    </a>
                </div>
            </div>
            <div>
                <button type="submit" id="loginbutton"
                    class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">' . langkit("sign_in") . '
                </button>
            </div>
        </form>
    </div>
</div>
        ');
}
//include_once "scripts/phpstatic/footer.php";
include_once "scripts/phpstatic/underscr.php";
