<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function showOffersPage()
    {
        return view('offers');
    }
}