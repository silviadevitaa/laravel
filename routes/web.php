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

Route::get('/lemot', function (){
  echo "kenapa kamu manis";
});

Route::get('/lapis', function (){
  return view('roti');
});

//pakai kontroler
Route::get('/bolu', 'CapungController@index');
//memanggil kontroler
//capung dengan fungsi punjangga
Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

Route::get('/Supplier','SupplierController@index');

// //sekarang bikin route untuk costommer
 Route::get('/Customer','CustomerController@index');
// //sekarang bikin route add umtuk Customer
// Route::get('/Customer','CustomerController@create');
// //untuk route dari custommer
// Route::get('/Customer/store','CustomerController@store');

Route::resource('Customer', 'CustomerController');
Route::resource('Supplier', 'SupplierController');
Route::get('/Employee','EmployeeController@index');
Route::resource('Employee', 'EmployeeController');
