<?php echo('
<div class="footer rounded bg-gray-500 bottom-0 h-32 md:h-64 w-100% mt-6 pt-2">
<div class="flaglangcontainer">
                <div class="">
                    '.langkit("change_lang").'
                </div>
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
</div>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script src="scripts/js/main.js"></script>
    </body>
</html>
');
