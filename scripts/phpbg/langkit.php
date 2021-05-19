<?php
function langkit($text): string
{
    if(isset($_COOKIE['choosenlanguage'])){ $lang = $_COOKIE['choosenlanguage'];}
    else if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
    }
    else{$lang = "en";}

    return match ($text) {
        "login_internship_header" => match ($lang) {"nl" => "Login voor stagiaires","de" =>"",default => "Sign in for interns"},
        "login_educator_header" => match ($lang){"nl" => "Login voor scholen","de" =>"",default => "Sign in for educators"},
        "login_companies_header" => match ($lang){"nl" => "Login voor bedrijven","de" =>"",default => "Sign in for entities",},
        "email_address" => match ($lang) {"nl" => "Email adres","de" =>"",default => "Email address",},
        "password" => match ($lang) {"nl" => "Wachtwoord","de" =>"",default => "Password",},
        "forgot_password" => match ($lang) {"nl" => "Wachtwoord vergeten?","de" =>"",default => "Forgot your password?",},
        "sign_in" => match ($lang) {"nl" => "Login","de" =>"",default => "Sign in",},
        "register" => match ($lang){"nl" => "Registreren","de" =>"",default => "Register"},
        "register_intership" => match($lang){"nl" => "Registreren voor stagieres","de" =>"",default => "interns register page"},
        "errorheader_404" => match($lang){"nl" => "Foutmelding 404:",default =>"Error 404:"},
        "errormsg_404_c=default" => match($lang){"nl" => "200",default => ""},
        "chlogin_int" => match($lang){"nl" => "stagiers",default => "interns"},
        "chlogin_edu" => match($lang){"nl" => "scholen",default => "education institutes"},
        "chlogin_com" => match($lang){"nl" => "entiteiten",default => "entities"},
        "cookies_knop" => match($lang){"nl" =>"Cookies accepteren",default => "Accept cookies"},
        "cookies_bericht" => match($lang){"nl" =>"",default => ""},
        default => match($lang){"nl" =>"Oeps, LangKIT(LKIT) kan de tekst niet laden :(",/*"de" => ""*/default =>"Oops, LangKIT(LKIT) has failed to load this text :("},
    };
}
