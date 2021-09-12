<?php
//everything between the %% (including the %) needs to be changed with your data
//%database host% is the link to the database like localhost:3306,127.0.0.1,db.example.com etc.
function gdbname(): array
{
    return array("%database host%","%database table%","%sql user username%","%sql user password%");
}