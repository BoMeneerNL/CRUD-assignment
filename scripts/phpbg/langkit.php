<?php
function langkit($text,$lang): string
{
    return match ($text) {
        "login_internship_header" => match ($lang) {"nl" => ("Login voor stagiaires"),default => ("Sign in (for interns)"),},
        "email_address" => match ($lang) {"nl" => ("Email adres"),default => ("Email address"),},
        "password" => match ($lang) {"nl" => ("Wachtwoord"),default => ("Password"),},
        "forgot_password" => match ($lang) {"nl" => ("Wachtwoord vergeten?"),default => ("Forgot your password?"),},
        "sign_in" => match ($lang) {"nl" => "Login",default => "Sign in",},
        "register" => match ($lang){"nl" => "Registreren",default => "Register"},
        default => ('Oops, LangKIT(LKIT) has failed to load this text :('),
    };
}


