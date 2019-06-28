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


Route::get('zxc',function(){
   auth()->loginUsingId(1);
});

Route::group(['middleware' => ['auth', 'verifyUser']], function() {
    // Get Routes
    // Pages Controller
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
    Route::get('/auth-whitepaper', 'PagesController@whitepaper')->name('auth-whitepaper');
    Route::get('/auth-terms', 'PagesController@terms')->name('auth-terms');
    Route::get('/auth-policy', 'PagesController@policy')->name('auth-policy');
    Route::post('/auth-payment-save', 'PaymentController@payment')->name('auth-payment-save');

    // Post Routes
    // Pages Controller
    Route::post('/auth-payment-save', 'PaymentController@payment')->name('auth-payment-save');
    
    // Verification
    Route::post('/verifications-create', 'Verification\VerificationController@verification_create')->name('verifications-create');
    Route::post('/verifications-approve', 'Verification\VerificationController@verification_approve')->name('verifications-approve');
    Route::post('/verifications-decline', 'Verification\VerificationController@verification_decline')->name('verifications-decline');
});

Route::prefix('payments')->as('payments')->group(function(){
    Route::get('square-index','Payments\SquareUpController@index');
    Route::get('square-locations','Payments\SquareUpController@get_locations');
    Route::post('square-paying','Payments\SquareUpController@paying');
});

Route::get('try', 'TryController@index');