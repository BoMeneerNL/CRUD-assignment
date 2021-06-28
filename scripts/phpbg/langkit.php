<?php
function langkit($text): string
{
    if (isset($_COOKIE['choosenlanguage'])) {
        $lang = $_COOKIE['choosenlanguage'];
    } else if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    } else {
        $lang = "en";
    }

    return match ($text) {
        "signup" => match($lang){
            "nl" => "Registreren",
            default => "Sign up"
        },
        "signin" => match ($lang){
        "nl" => "inloggen",
        default => "Sign in"
        },
        "optional" => match ($lang){
          "nl" => "Optioneel",
          default => "optional"
        },
        "yes" => match ($lang){
        "nl" => "Ja",
        default => "Yes",
        },

        "no" => match ($lang){
            "nl" => "Nee",
            default => "No"
        },
        "usure"=> match ($lang){
        "nl" =>"Weet je zeker dat je deze actie wil uitvoeren?:",
        default =>"Are you sure you want to do this?:"
        },
        "title_ask_getinta" => match ($lang){
            "nl" => "account veranderen naar 'Stagiers account'",
            default => "Change account to 'Intern account'"
        },
        "desc_ask_getinta" => match ($lang){
            "nl" =>"Het veranderen naar een stagiers account kan slechtere gevolgen hebben voor het veranderen naar een organizatie of educatoren account",
            default => "Changing to an intern account could badly affect changing to an organization or educational account"
        },
        "givenname" => match ($lang) {
            "nl" => "Voornaam",
            default => "Given name"
        },
        "familyname" => match ($lang) {
            "nl" => "Achternaam",
            default => "Family name"
        },
        "header_myacc_1" => "Account type",
        "header_myacc_2" => match ($lang) {
            "nl" => "Account/Login informatie",
            default => "Account/Login details"
        },
        "header_myacc_3" => match ($lang) {
            "nl" => "Persoonlijke informatie",
            default => "Personal Information"
        },
        "reqnp" => match ($lang) {
            "nl" => "Nieuw wachtwoord aanvragen",
            default => "Request new password"
        },
        "goto_next_step" => match ($lang) {
            "nl" => "Verifieëren en naar de volgende stap gaan",
            default => "Verify data, and go to the next step"
        },
        "reg_stage1_errorheader" => match ($lang) {
            "nl" => "Er is iets fout gegaan :(<br/>",
            default => "Something(s) went wrong :(<br/>"
        },
        "redec" => match ($lang) {
            "nl" => "je email adres ziet er 'bijzonder' uit, kijk of je email correct is",
            default => "Oops, Your email address seems off, please check if your email is correct"
        },
        "udae" => match ($lang) {
            "nl" => "Je gekozen gebruikersnaam word al gebruikt",
            default => "This username is already taken"
        },
        "registering_step_header" => match ($lang) {
            "nl" => "Registratie (Stap " . $_GET['step'] . ")",
            default => "Registration (Step " . $_GET['step'] . ")"
        },
        "change_lang" => match ($lang) {
            "nl" => "Taal veranderen:",
            default => "Change language:"
        },
        "login_header" => match ($lang) {
            "nl" => "Login",
            default => "Sign in"
        },
        "username" => match ($lang) {
            "nl" => "Gebruikersnaam",
            default => "Username"
        },
        "email_address" => match ($lang) {
            "nl" => "Email adres",
            default => "Email address",
        },
        "password" => match ($lang) {
            "nl" => "Wachtwoord",
            default => "Password",
        },
        "forgot_password" => match ($lang) {
            "nl" => "Wachtwoord vergeten?",
            default => "Forgot your password?",
        },
        "sign_in" => match ($lang) {
            "nl" => "Login",
            default => "Sign in",
        },
        "register" => match ($lang) {
            "nl" => "Registreren",
            default => "Register"
        },
        "register_intership" => match ($lang) {
            "nl" => "Registreren voor stagieres",
            default => "interns register page"
        },
        "Err_loading_usergdat" => match ($lang) {
            "nl" => "Oeps, iets is fout gegaan, kan geen username en/of wachtwoord sessie vinden",
            default => "Oops, something went wrong, could not find username and/or password session"
        },
        "cookies_knop" => match ($lang) {
            "nl" => "Cookies accepteren",
            default => "Accept cookies"
        },
        "cookies_bericht" => match ($lang) {
            "nl" => " ",
            default => "This website uses Cookies and Sessions to make the website usable"
        },
        default => match ($lang) {
            "nl" => "Oeps, LangKIT(LKIT) kan de tekst niet laden :(",
            default => "Oops, LangKIT(LKIT) has failed to load this text :("
        },
    };
}
