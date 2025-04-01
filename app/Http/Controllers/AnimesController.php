<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimesController extends Controller {
    public function listarAnimes() {
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
    }
}

