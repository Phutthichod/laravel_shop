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
Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/index', 'IndexController@index');
Route::post('/index', 'IndexController@login');
Route::get('/cart','ProductController@index');
Route::get('/product',"ProductController@toJSON");
Route::get('/home','ProfileController@index');
Route::get('/logout','LogoutController@index');
Route::post('/','IndexController@login');
Route::post('/checkout','CheckoutController@index');
Route::get('/productList','CheckoutController@toJSON');
// Route::get('members', function() {
//     $users = Member::all();
//     return View::make('index',array('allMembers' => $users));
//     });
