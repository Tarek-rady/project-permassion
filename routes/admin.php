<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\LoginMediaController;

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


Route::get('language/{locale}', function ($locale) {

    app()->setLocale($locale);

    session()->put('locale', $locale);

    return redirect()->back();
})->name('language');

Route::get('/', [AuthController::class , 'showLoginForm'])->name('login');

Route::prefix('admin')->middleware('localization')->namespace('Dashboard')->name('admin.')->group(function () {

    /* Auth Routes */
    Route::get('login', [AuthController::class , 'showLoginForm'])->name('login');
    Route::post('login',[AuthController::class , 'login'] )->name('login.post');
    Route::get('logout',[AuthController::class , 'logout'])->name('logout');


    /* Dashboard Routes */
    Route::middleware('auth')->group(function () {

        Route::get('/', [DashboardController::class , 'home'])->name('home');

        // admins
        Route::resource('/admins' , 'AdminController');
        Route::get('profile', 'AdminController@profile')->name('profile');
        Route::post('update-profile', 'AdminController@updateProfile')->name('update_profile');


        // roles
        Route::resource('/roles' , 'RoleController');

        // categories
        Route::resource('/categories' , 'CategoryController');
        Route::get('category_export','CategoryController@get_category_data')->name('category.export');



        // products
        Route::resource('/products' , 'ProductController');
        Route::get('/subcategory-category/{id}' , 'ProductController@subcategoryBycategory');
        Route::get('/product-rates/{product_id}' , 'ProductController@rates')->name('product-rates');

        // banners
        Route::resource('/banners' , 'BannerController');

        // clints
        Route::resource('/clints' , 'ClintController');

        // orders
        Route::resource('/orders' , 'OrderController');
        Route::get('/orders-waiting' , 'OrderController@order_waiting')->name('orders-waiting');
        Route::get('/orders-complated' , 'OrderController@order_complated')->name('orders-complated');
        Route::get('/orders-rejected' , 'OrderController@order_rejected')->name('orders-rejected');

        // news
        Route::resource('/news' , 'NewsController');

        //Setting
        Route::get('/about-us' , 'SettingController@about')->name('about-us');
        Route::put('/about-us' , 'SettingController@storeAbout')->name('about-store');


        Route::get('/setting' , 'SettingController@setting')->name('setting');
        Route::put('/setting' , 'SettingController@storeSetting')->name('setting-store');


        Route::get('/contact-us' , 'SettingController@contact_us')->name('contact-us');

        // categories
        Route::resource('/categories' , 'CategoryController');

        // notifications
        Route::get('/notification/{id}' , 'NotificationController@order_notificication')->name('notification');
        Route::get('/clear-all-notifications' , 'NotificationController@clear_all_notifications')->name('notifications');

    });
});


