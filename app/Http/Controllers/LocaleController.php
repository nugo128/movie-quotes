<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale(Request $request, $locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
