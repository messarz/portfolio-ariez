<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

}
