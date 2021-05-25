<?php
function injector(){
    $username = base64_encode($_SESSION['reg_username']);
    $email = base64_encode($_SESSION['reg_email']);
    $password = base64_encode($_SESSION['reg_password']);
}