<?php
include_once "scripts/phpstatic/header.php";
include_once "scripts/phpbg/sql-pdo/getuserdat.php";
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpbg/langhandler.php";
function form()
{
    switch ($_GET['cnum']) {
        case 0:
            echo('
           <form>
           <option></option>
           </form> 
        ');
            break;
    }
}

if (isset($_GET['cnum'])) {
    if (isset($_GET['val'])) {
        if ($_GET['val'] == "yes") {
            switch ($_GET['cnum']){
                case 0:


                    break;
            }
        } else {
            form();
        }
    } else {
        form();
    }
}
