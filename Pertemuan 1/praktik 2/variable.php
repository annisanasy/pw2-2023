<?php

    /*
        variable system
        variable built in PHP
    */ 
    echo $_SERVER["DOCUMENT_ROOT"];


    /*
        Variable User
        variable yang dibuat oleh user
    */
    echo '<br>';

    $name = 'Nasywa';
    $age = 18;
    $weight = 50.5;

    echo 'Nama saya adalah ' . $name;





    /*
        Variable konstan
        variable yang tidak bisa diubah nilainya
        1. Menggunakan define() | define ('fruit' , 'Apel');
        2. Menggunakan const    | const fruit = 'Apel';
    */
    echo '<br>';

    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME; 
    echo '<br>';
    echo BASE_URL;
?>