<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TryController extends Controller
{
    public function index(Request $request) {

        return $this->users();
    }
    public function users() {

        return User::all();
    }
}
