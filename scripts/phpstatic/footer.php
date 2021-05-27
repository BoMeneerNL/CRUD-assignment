<?php
if(isset($_GET['serve'])){
    $lnkrnl = "index?serve=".$_GET['serve']."&lang=nl";
    $lnkren = "index?serve=".$_GET['serve']."&lang=en";
}
else{
    $lnkrnl = basename($_SERVER['SCRIPT_NAME'], '.php')."?lang=nl";
    $lnkren = basename($_SERVER['SCRIPT_NAME'], '.php')."?lang=en";
}
echo('
        <footer class=" fixed rounded bg-gray-500 w-screen h-32 md:h-48 bottom-0 mt-6 pt-2">
            <div class="flaglangcontainer">
                <div>
                    '.langkit("change_lang").'
                </div>
                <div id="nl" class="mx-3 mt-1 float-left">
                    <a href="'.$lnkrnl.'">
                        <img class="rounded" alt="nl_flag_change_language" src="assets/img/flags/nl.svg" width="35" height="40">
                    </a>
                </div>
                <div id="en" class="mx-3 mt-1">
                    <a href="'.$lnkren.'">
                        <img class="rounded" alt="nl_flag_change_language" src="assets/img/flags/en.svg" width="40" height="40">
                    </a>
                </div>
             </div>
        </footer>
        <script src="scripts/js/cookies-yum.js"></script>
        <script src="scripts/js/min.main.js"></script>
    </body>
</html>
');
