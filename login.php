<?php
include_once "scripts/phpstatic/ntse.header.php";
include_once "scripts/phpbg/langhandler.php";
include_once 'scripts/phpbg/langkit.php';
echo('
 <div class="min-h-70p">
    <div class="items-center justify-center flex px-4 sm:px-6 lg:px-8 pt-3">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto" width="110" height="93" src="assets/img/IJP2.svg" alt="Workflow">
                <h2 class="mt-3 text-center text-2xl font-extrabold text-gray-900"> ' .
                langkit("login_header") . '
                </h2>
            </div>
            <form class="mt-6 space-y-6" action="index?serve=loginchecker" method="post">
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="'.langkit("email_address").'">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="'.langkit("password").'">
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        <a href="index?serve=forgotpassword"
                            class="font-medium text-indigo-600 hover:text-indigo-500">
                            '.langkit("forgot_password").'
                        </a>
                    </div>
                </div>
                <div>
                    <button type="submit" id="loginbutton"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-ijp-lichtblauw hover:bg-ijp-donkerblauw focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.langkit("sign_in").'
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
        ');
include_once "scripts/phpstatic/footer.php";
