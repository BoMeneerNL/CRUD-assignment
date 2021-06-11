<?php
//everything between the %% (including the %) needs to be changed with your data
//%database host% is the link to the database like localhost:3306,127.0.0.1,db.example.com etc.
function gdbname($act): string
{
    return match ($act) {
        "action1", "action2", "action3" => "%database host%;%database table%;%sql user username%;%sql user password%",
    };
}