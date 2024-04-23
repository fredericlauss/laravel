<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function contact() {
        return view('contact');
    }
    public function about() {
        $age=35;
        return view('about', ['age' => $age]);
    }
}
