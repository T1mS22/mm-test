<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
     _             _______ _           
    | |           |__   __(_)          
    | |__  _   _     | |   _ _ __ ___  
    | '_ \| | | |    | |  | | '_ ` _ \ 
    | |_) | |_| |    | |  | | | | | | |
    |_.__/ \__, |    |_|  |_|_| |_| |_|
            __/ |                      
           |___/                       
      _____      _                _     _           
     / ____|    | |              (_)   | |          
    | (___   ___| |__  _ __   ___ _  __| | ___ _ __ 
     \___ \ / __| '_ \| '_ \ / _ \ |/ _` |/ _ \ '__|
     ____) | (__| | | | | | |  __/ | (_| |  __/ |   
    |_____/ \___|_| |_|_| |_|\___|_|\__,_|\___|_|   
                                                    
                                                    
    ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
