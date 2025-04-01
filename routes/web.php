<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animes', function () {
    $animes = [
        'Kimetsu no Yaiba',
        'Bakemonogatari',
        'Shingeki no Kyoujin'
    ];

    $html = "<ul>";
    foreach($animes as $anime){
        $html .= "<li>$anime</li>";
    }
    $html .= "</ul>";

    return $html;
});