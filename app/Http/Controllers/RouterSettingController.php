<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouterSettingController extends Controller
{
    public function showRouterSettingPage()
    {
        return view('routersetting');
    }
}
