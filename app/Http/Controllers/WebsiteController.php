<?php

namespace App\Http\Controllers;


class WebsiteController extends Controller
{

    public function index(){

        return view('pages.landing');
    }
    public function features(){
            return view('pages.landing');
    }

}