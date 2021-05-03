<?php
function langkit($text,$lang): string
{
    return match ($text) {
        "login_internship_header" => match ($lang) {"nl" => ("Login voor stagiaires"),"de" =>"",default => ("Sign in (for interns)")},
        "login_educator_header" => match ($lang){"nl" => ("Login voor scholen"),"de" =>"",default => ("Sign in (for educators)")},
        "login_companies_header" => match ($lang){"nl" => ("Login voor bedrijven"),"de" =>"",default => ("Sign in (for companies)"),},
        "email_address" => match ($lang) {"nl" => ("Email adres"),"de" =>"",default => ("Email address"),},
        "password" => match ($lang) {"nl" => ("Wachtwoord"),"de" =>"",default => ("Password"),},
        "forgot_password" => match ($lang) {"nl" => ("Wachtwoord vergeten?"),"de" =>"",default => ("Forgot your password?"),},
        "sign_in" => match ($lang) {"nl" => "Login","de" =>"",default => "Sign in",},
        "register" => match ($lang){"nl" => "Registreren","de" =>"",default => "Register"},
        "register_intership" => match($lang){"nl" =>"Registreren voor stagieres","de" =>"",default => "interns register page"},
        default => match($lang){/*"nl" =>"Oops, LangKIT(LKIT) has failed to load this text :(","de" => ""*/default =>"Oops, LangKIT(LKIT) has failed to load this text :("},
    };
}
