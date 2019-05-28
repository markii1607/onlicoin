<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index () {
    	return view('index');
    }
    public function login () {
    	return view('login');
    }
    public function verify () {
    	return view('verify');
    }
    public function payment () {
    	return view('payment');
    }
    public function register () {
    	return view('register');
    }
    public function landing () {
    	return view('landing');
    }
    public function about () {
    	return view('about');
    }
    public function cin_buy_oct () {
    	return view('cin_buy_oct');
    }
    public function cin_manage_funds () {
    	return view('cin_manage_funds');
    }
    public function cin_payment () {
    	return view('cin_payment');
    }
    public function cin_remittance () {
    	return view('cin_remittance');
    }
    public function cout_remittance () {
    	return view('cout_remittance');
    }
    public function cout_manage_funds () {
    	return view('cout_manage_funds');
    }
    public function cout_payment () {
    	return view('cout_payment');
    }
    public function cout_sell_oct () {
    	return view('cout_sell_oct');
    }
    public function cout_transfer () {
    	return view('cout_transfer');
    }
}
