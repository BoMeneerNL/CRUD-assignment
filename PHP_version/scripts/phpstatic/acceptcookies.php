<?php
include_once 'scripts/phpbg/langkit.php';
    $linktag1 = isset($_GET['serve']) ? "<a href='index?serve=' " . $_GET['serve'] . "&lang=nl' class='p-0 m-0'>" : "<a href='" . basename($_SERVER['SCRIPT_NAME'], '.php') . "?lang=nl' class='p-0 m-0'>";
    $linktag2 = isset($_GET['serve']) ? "<a href='index?serve=' " . $_GET['serve'] . "&lang=en' class='p-0 m-0'>" : "<a href='" . basename($_SERVER['SCRIPT_NAME'], '.php') . "?lang=en' class='p-0 m-0'>";

echo('
<div class="fixed z-10 inset-0 overflow-y-auto" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 md:pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <p class="text-sm text-gray-500">
                                ' . langkit("cookies_bericht") . '
                            </p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-2 py-3 sm:flex sm:flex-row-reverse">
                ' . $linktag1 . '
                    <button type="button" class="py-2 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm p-3 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-2 sm:w-auto sm:text-sm">
                        <img src="../../assets/img/nl.svg" alt="educator_logo_changelogintype" width="20" height="15">
                    </button>
                </a>
                ' . $linktag2 . '
                <button  type="button" class="py-2 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm p-3 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-2 sm:w-auto sm:text-sm">
                    <img src="assets/img/flags/en.svg" alt="educator_logo_changelogintype" width="23" height="15">
                </button>
                </a>
                <button type="button"
                    class=" mt-2 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-3 py-1 bg-red-600 text-base font-medium text-white bg-ijp-lichtblauw hover:bg-ijp-donkerblauw focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="clikr(0)">
                    ' . langkit("cookies_knop") . '
                </button>
            </div>
        </div>
    </div>
</div>


');