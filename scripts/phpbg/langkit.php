<?php
function langkit($text): string
{
    if(isset($_COOKIE['choosenlanguage'])){ $lang = $_COOKIE['choosenlanguage'];}
    else if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
    }
    else{$lang = "en";}

    return match ($text) {
        "change_lang" => match($lang){"nl" => "Taal veranderen:","de" => "",default => "Change language:"},
        "login_internship_header" => match ($lang) {"nl" => "Login voor stagiaires","de" =>"",default => "Sign in for interns"},
        "login_educator_header" => match ($lang){"nl" => "Login voor scholen","de" =>"",default => "Sign in for educators"},
        "login_companies_header" => match ($lang){"nl" => "Login voor entiteiten","de" =>"",default => "Sign in for entities",},
        "email_address" => match ($lang) {"nl" => "Email adres","de" =>"",default => "Email address",},
        "password" => match ($lang) {"nl" => "Wachtwoord","de" =>"",default => "Password",},
        "forgot_password" => match ($lang) {"nl" => "Wachtwoord vergeten?","de" =>"",default => "Forgot your password?",},
        "sign_in" => match ($lang) {"nl" => "Login","de" =>"",default => "Sign in",},
        "register" => match ($lang){"nl" => "Registreren","de" =>"",default => "Register"},
        "register_intership" => match($lang){"nl" => "Registreren voor stagieres","de" =>"",default => "interns register page"},
        "errorheader_404" => match($lang){"nl" => "Foutmelding 404:",default =>"Error 404:"},
        "errormsg_404_c=default" => match($lang){"nl" => "200",default => ""},
        "chlogin_int" => match($lang){"nl" => "stagiers",default => "interns"},
        "chlogin_edu" => match($lang){"nl" => "scholen",default => "educational institutes"},
        "chlogin_com" => match($lang){"nl" => "organisaties",default => "entities"},
        "cookies_knop" => match($lang){"nl" =>"Cookies accepteren",default => "Accept cookies"},
        "cookies_bericht" => match($lang){"nl" =>" ",default => "This website uses Cookies and Sessions to make the website usable"},
        default => match($lang){"nl" =>"Oeps, LangKIT(LKIT) kan de tekst niet laden :(",/*"de" => ""*/default =>"Oops, LangKIT(LKIT) has failed to load this text :("},
    };
}
