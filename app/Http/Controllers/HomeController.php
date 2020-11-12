<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function setLocale($lang){
        Session::put('lang', $lang);
        
        return redirect()->back();
    }
}
