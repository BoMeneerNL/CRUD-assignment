<?php
function langkit($text,$lang){
    switch ($text){
        case "mainpage":
            switch ($lang){
                case "nl":
                    echo('Hoofdpagina');
                    break;
                case "en-gb":
                    echo("main page");
            }
    }
}


