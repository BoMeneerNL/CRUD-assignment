<?php
function injecting($username,$email,$hashpass,$tel){
    $username = base64_encode($username);
    $email = base64_encode($email);
}