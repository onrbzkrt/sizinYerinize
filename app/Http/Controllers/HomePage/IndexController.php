<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {

//        return view('HomePage.index');
        return view('index');
    }

    public function changeLang($lang)
    {
        $langs = ['tr', 'en'];

        if (in_array($lang, $langs))
        {
            Session::put('lang', $lang);

            return redirect()->back()->with('lang_msg', Lang::get('home.langMsg'));
        }
    }
}
