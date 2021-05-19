<?php
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpstatic/header.php";
if(isset($_GET['e404c'])){
    switch ($_GET['e404c']){
        case "loginstack":
            echo('
                <h3>'.langkit("errorheader_404").'</h3>
                <p>Oops, the called login website could not be found</p>
                <h6>e404_c=loginstack_non-usable-value</h6>
            ');
    }
}
else{
    echo('
        <h3>'.langkit("errorheader_404").'</h3>
        <p>oops, this serve address could not be found</p>
    ');
}
