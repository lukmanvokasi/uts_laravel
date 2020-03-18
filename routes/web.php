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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');

Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');


Route::get('/barang/lapor', "BarangController@lapor")->name("barang.lapor");

Route::get('/barang', "BarangController@index")->name("barang.index");
Route::get("/barang/{id}/detail", "BarangController@show")->name("barang.show");
Route::get("/barang/create", "BarangController@create")->name("barang.create");
Route::post("/barang", "BarangController@store")->name("barang.store");
Route::get("/barang/{id}/edit", "BarangController@edit")->name("barang.edit");
Route::post("/barang/{id}/update", "BarangController@update")->name("barang.update");
Route::get("/barang/{id}/delete", "BarangController@destroy")->name("barang.destroy");

Route::get('/userbarang', "UserBarangController@index")->name("userbarang.index");
Route::get("/userbarang/{id}/detail", "UserBarangController@show")->name("userbarang.show");
Route::get("/userbarang/{id}/create", "UserBarangController@create")->name("userbarang.create");
Route::post("/userbarang", "UserBarangController@order")->name("userbarang.order");
