<?php
include_once 'scripts/phpbg/langkit.php';

switch ($_SESSION['loginstack']){
    case "intern":
        echo('
        <div class="min-h-screen bg-gray-50">
        <div></div>
        <div class="justify-center justify-items-center grid grid-cols-5 text-xs md:text-sm gap-1 place-items-start h-32 pt-5">
            <div></div>
            <div><img src="assets/img/school_intership_logo.svg" alt="student_logo_changelogintype" width="25" height="25"><p>'.langkit("chlogin_int").'</p></div>
            <div><img src="assets/img/school_building_edu.svg" alt="student_logo_changelogintype" width="25" height="25"><p>'.langkit("chlogin_edu").'</p></div>
            <div><img src="assets/img/school_building_edu.svg" alt="student_logo_changelogintype" width="25" height="25"><p>'.langkit("chlogin_com").'</p></div>
            <div></div>
        </div>
            <div class="flaglangcontainer">
                <div id="nl" class="mx-3">
                    <a href="index?serve=login&lang=nl">
                        <img class="rounded" alt="nl_flag_change_language" src="assets/img/flags/nl.svg" width="40" height="40">
                    </a>
                </div>
                <div id="en" class="mx-3 mt-1">
                    <a href="index?serve=login&lang=en">
                        <img class="rounded" alt="nl_flag_change_language" src="assets/img/flags/en.svg" width="40" height="40">
                    </a>
                </div>
            </div>
            <div class="items-center justify-center flex px-4 sm:px-6 lg:px-8">
                <div class="max-w-md w-full space-y-8">
                    <div>
                        <img class="mx-auto" width="80" height="93" src="assets/img/internship_japan_logo.png" alt="Workflow">
                        <h2 class="mt-3 text-center text-3xl font-extrabold text-gray-900">
                            '.langkit("login_internship_header").'
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
                                <a href="index?serve=forgotpassword_intership"
                                    class="font-medium text-indigo-600 hover:text-indigo-500">
                                    '.langkit("forgot_password").'
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
