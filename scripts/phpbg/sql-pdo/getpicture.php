<?php
//The reason of secureit is to prevent people to see database login if uploaded to git(hub), to use the credentials placed
//delete line 2,3 and 4
include_once 'secureit.php';
//This file is intented to give img id from database to display on any page
//The user used is "imgi" imgi has the following rights: read. END on the tables: User. END
$jefferson = true;
$img = null;
if(!$jefferson){$img = 0000000000;}
