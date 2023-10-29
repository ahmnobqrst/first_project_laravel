<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/*Route::get('/',function(){
    return "home";
});*/
 
  route::get('off','ProController@create');
  route::post('store','ProController@store')->name('store');

  route::get('show','ProController@ShowUserData')->name('show');

   route::get('edituser/{user_id}','ProController@edituserdata');

  route::get('updatetuser/{update_user_id}','ProController@ShowUpdatebeforeupdate');
  route::post('updated/{update_user_id}','ProController@SaveUpdateuser')->name('updated');
  route::get('delete/{delete_user_id}','ProController@Deletuser')->name('delete');



  //////////////////////////////////////// products routes //////////////////////////////

  route::get('add_product','ProductController@create_product');
  route::post('added','ProductController@store_product')->name('stored_product');



  ////////////////////////////// route relations /////////////////////

   route::get('many','ProductController@user_product');
   route::get('shows','ProductController@getproductData')->name('getproductname');
   route::get('product/{user_id}','ProductController@showddataofprodanduser')->name('getproduct');

   route::get('editproduct/{product_id}','ProductController@editproduct')->name('edit_product');
   route::get('deleteproduct/{product_id}','ProductController@deleteproduct')->name('delete_product');
