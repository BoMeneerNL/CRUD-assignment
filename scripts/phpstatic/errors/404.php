<?php
include_once "scripts/phpbg/langkit.php";
include_once "scripts/phpstatic/header.php";
if(isset($_GET['e404c'])){
    switch ($_GET['e404c']){
        case "loginstack":
            echo('
                <h3>'.langkit("errorheader_404").'</h3>
                <p>Oops, you shouldn`t be in this situation</p>
                <h6>e404_c=loginstack_CALL@NULL</h6>
                <script src="scripts/js/cookies-yum.js"></script>
                <script src="scripts/js/min.main.js"></script>
            ');
    }
}
else{
    echo('
        <h3>'.langkit("errorheader_404").'</h3>
        <p>oops, this serve address could not be found</p>
        <script src="scripts/js/cookies-yum.js"></script>
        <script src="scripts/js/min.main.js"></script>
    ');
}
