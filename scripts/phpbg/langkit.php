<?php
function langkit($text,$lang): string
{
    switch ($text){
        case "login_internship_1":
            return match ($lang) {
                "nl" => ("Login voor stagiaires"),
                default => ("Sign in (for interns)"),
            };
        case "email_address":
            return match ($lang) {
                "nl" => ("Email adres"),
                default => ("Email address"),
            };
        case "password":
            return match ($lang) {
                "nl" => ("Wachtwoord"),
                default => ("Password"),
            };
        case "forgot_password":
            return match ($lang){
                "nl" => ("Wachtwoord vergeten?"),
                default => ("Forgot your password?"),
            };
        case "sign_in":
            return match ($lang){
                "nl" => "Login",
                default => "Sign in",
            };
    }
}


