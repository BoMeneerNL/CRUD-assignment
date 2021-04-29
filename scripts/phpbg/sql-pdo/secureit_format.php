<?php
//everything between the %% (including the %) needs to be changed with your data
function YourFunctionName($action){
    return match ($action){

        //for the output use the file asking for this info
        "%action to check%" => "%SQL database location%;%SQL database%;%SQL user%;%SQL user password%",
    };
}

?>