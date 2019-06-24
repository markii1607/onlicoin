<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', 'PagesController@landing');
Route::get('/auth-about', 'PagesController@about')->name('auth-about');
Route::get('logout', function() {
    Auth::logout();
    return redirect('/login');
});

Route::get('test',function(){
	return 'tesst';
});

Route::group(['middleware' => ['auth', 'verifyUser']], function() {
    Route::get('/auth-verify', 'PagesController@verify')->name('auth-verify');
    Route::get('/auth-payment', 'PagesController@payment')->name('auth-payment');
    Route::get('/auth-index', 'PagesController@index')->name('auth-index');
    Route::get('/auth-cin_buy_oct', 'PagesController@cin_buy_oct')->name('auth-cin_buy_oct');
    Route::get('/auth-cin_manage_funds', 'PagesController@cin_manage_funds')->name('auth-cin_manage_funds');
    Route::get('/auth-cin_payment', 'PagesController@cin_payment')->name('auth-cin_payment');
    Route::get('/auth-cin_remittance', 'PagesController@cin_remittance')->name('auth-cin_remittance');
    Route::get('/auth-cout_sell_oct', 'PagesController@cout_sell_oct')->name('auth-cout_sell_oct');
    Route::get('/auth-cout_manage_funds', 'PagesController@cout_manage_funds')->name('auth-cout_manage_funds');
    Route::get('/auth-cout_payment', 'PagesController@cout_payment')->name('auth-cout_payment');
    Route::get('/auth-cout_remittance', 'PagesController@cout_remittance')->name('auth-cout_remittance');
    Route::get('/auth-cout_transfer', 'PagesController@cout_transfer')->name('auth-cout_transfer');
});

// Post Routes
Route::post('/auth-verify', 'PagesController@userVerify')->name('auth-verify');

Route::get('try', 'TryController@index');