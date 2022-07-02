<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    dashboardController,
    CategoryController,
    CampaignController,
    SettingController,
    UserProfileInformation,
    FrontController,
};

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

Route::get('/', [FrontController::class, 'index']);

Route::get('/contact',[FrontController::class, 'contact']);
Route::post('/contact',[FrontController::class, 'contact_store']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/donation',[FrontController::class, 'donation']);
Route::get('/donation/{id}', [FrontController::class, 'donation_detail']);

Route::group([
    'middleware' => ['auth','role:admin,donatur']
], function(){
    Route::get('/donation/{id}/create', [FrontController::class, 'donation_create']);

    Route::post('/donation/{id}', [FrontController::class, 'donation_store']);

    Route::get('/donation/{id}/payment/{order_number}', [FrontController::class, 'donation_payment']);
    Route::get('/donation/{id}/payment-confirmation/{order_number}',[FrontController::class, 'donation_payment_confirmation'] );
    Route::post('/donation/{id}/payment-confirmation/{order_number}',[FrontController::class, 'donation_payment_confirmation_store'] );
});

Route::post('/subscriber',[FrontController::class, 'subscriberStore']);


Route::group([
    'middleware' => ['auth','role:admin,donatur']
], function(){
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

    Route::get('/user/profile', [UserProfileInformation::class, 'show'])->name('profile.show');
    Route::delete('/user/bank/{id}', [UserProfileInformation::class, 'bankDestroy'])->name('profile.bank.destroy');

    Route::group([
        'middleware' => 'role:admin'
    ], function(){
        Route::resource('/category', CategoryController::class);

        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::put('/setting/{setting}', [SettingController::class, 'update'])->name('setting.update');
        Route::delete('/setting/{setting}/bank/{id}', [SettingController::class, 'bankDestroy'])->name('setting.bank.destroy');
    });

    Route::get('/campaign/data', [CampaignController::class, 'data'])->name('campaign.data');
    Route::get('/campaign/detail/{id}', [CampaignController::class, 'detail'])->name('campaign.detail');
    Route::resource('/campaign', CampaignController::class);

    Route::group([
        'middleware' => 'role:donatur'
    ], function(){
        //
    });
});