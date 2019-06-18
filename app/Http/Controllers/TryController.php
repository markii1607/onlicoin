<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TryController extends Controller
{
    public function index(Request $request) {

        return url()->current();
    }
}
