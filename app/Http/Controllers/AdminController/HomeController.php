<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('home.index');
    }

}
