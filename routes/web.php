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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('shop.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ここから追加(ログイン関係)
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');


Route::get('password/admin/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('password/admin/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('password/admin/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('password/admin/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');


Route::get('users/test/', 'TestController@index')->name('index');
Route::get('admins/test/', 'AdminController@index')->name('index');


Route::get('adminlte', function () {
    return view('adminlte');
});

Route::resource('products', 'ProductController');
Route::resource('orders', 'OrderController');
Route::resource('customers', 'CustomerController');
Route::resource('mails', 'MailController');
Route::resource('companies', 'CompanyController');
Route::resource('categories', 'CategoryController');
Route::resource('initials', 'InitialController');
Route::resource('initials', 'InitialController');
Route::resource('makers', 'MakerController');
Route::resource('law', 'LawController');

Route::resource('categorys', 'CategoryController');
Route::resource('classifications', 'ClassificationController');
Route::resource('genders', 'GenderController');
Route::resource('ages', 'AgeController');
Route::resource('pulldowns', 'PulldownMainController');

Route::post('index', 'ImageController@index')->name('image.index');
Route::post('upload', 'ImageController@upload')->name('upload');
