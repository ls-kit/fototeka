<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function view()
    {
        return view('language');
    }

    public function selectLanguage($lang)
    {
        session()->put('lang', $lang);
        return redirect()->back();
    }

    public function changeLanguage(Request $request)
    {
        $validated = $request->validate([
            'language' => 'required',
        ]);

        \Session::put('language', $request->language);

        return redirect()->back();
    }
}
