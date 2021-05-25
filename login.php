<?php
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langhandler.php";
include_once 'scripts/phpbg/langkit.php';
echo('
<div class="justify-center flex pt-3">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto" width="100" height="93" src="assets/img/IJP2.svg" alt="Workflow">
            <h2 class="text-center text-xl font-extrabold text-gray-900"> ' .
            langkit("login_header") . '
            </h2>
        </div>
        <form class="mt-6 space-y-4" action="index?serve=loginchecker" method="post">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="username" class="sr-only">Password</label>
                    <input id="username" name="username" type="text" required
                        class="rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 text-sm"
                        placeholder="'.langkit("username").'">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="'.langkit("password").'">
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-sm">
                    <a href="index?serve=forgotpassword"
                        class="font-medium text-indigo-600 hover:text-indigo-900">
                        '.langkit("forgot_password").'
                    </a>
                </div>
            </div>
            <div>
                <button type="submit" id="loginbutton"
                    class="relative w-full justify-center py-2 text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-900">'.langkit("sign_in").'
                </button>
            </div>
        </form>
    </div>
</div>
        ');
include_once "scripts/phpstatic/footer.php";
