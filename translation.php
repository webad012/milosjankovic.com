<?php

$translation = array(
    'AboutMe' => array(
        'sr' => 'O meni',
        'en' => 'About me'
    ),
    'Contact' => array(
        'sr' => 'Kontakt',
//        'en' => 'Contact'
    ),
    'Projects' => array(
        'sr' => 'Projekti',
//        'en' => 'Projects'
    ),
    'Languages' => array(
        'sr' => 'Jezici',
//        'en' => 'Languages'
    ),
    'Serbian' => array(
        'sr' => 'Srpski',
//        'en' => 'Serbian'
    ),
    'English' => array(
        'sr' => 'Engleski',
//        'en' => 'English'
    ),
);

function mjtranslation($token)
{    
    $result = $token;
    
    global $translation;
    
    $lang = $_SESSION['lang'];
    
    if (!empty($lang)
        && array_key_exists($token, $translation)
        && array_key_exists($lang, $translation[$token])
    ) 
    {
        $result = $translation[$token][$lang];
    }

    return $result;
}

