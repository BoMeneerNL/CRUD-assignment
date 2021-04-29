<?php
include_once 'scripts/phpbg/langkit.php';

switch ($_SESSION['loginstack']){
    case "intern":
        echo('
        <div class="flaglangcontainer">
            <div id="nl">
                <img src="assets/img/flags/nl.svg" width="10" height="100">
            </div>
        
        </div>
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto" width="80" height="93" src="assets/img/internship_japan_logo.png"
                alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                '.langkit("login_internship_header",$_COOKIE['choosenlanguage']).'
            </h2>
        </div>
        <form class="mt-8 space-y-6" action="index?serve=loginchecker" method="post">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="'.langkit("email_address",$_COOKIE['choosenlanguage']).'">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="'.langkit("password",$_COOKIE['choosenlanguage']).'">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="text-sm">
                    <a href="index?serve=forgotpassword_intership" class="font-medium text-indigo-600 hover:text-indigo-500">
                        '.langkit("forgot_password",$_COOKIE['choosenlanguage']).'
                    </a>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    '.langkit("sign_in",$_COOKIE['choosenlanguage']).'
                </button>
            </div>
        </form>
    </div>
</div>
        
        ');
        break;
    case "educator":
        echo('
        
        
        
        
        
        
        ');
        break;
    case "company":
        echo ('
        
        
        
        
        
        ');
        break;
}
