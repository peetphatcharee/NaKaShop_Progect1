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
Route::get('/login_Shop', function () {
    return view('login_Shop');
});
Route::get('/test', function () {
    return view('test');
});


Route::get('Shop_profile{shop_id}', 'ShopController@getprofile');//แสดงหน้าโปรไฟล์ร้าน
Auth::routes();
Route::get('cart', 'ShopController@cart');
Route::get('Shop_Register', 'ShopController@getRegister_shop1');//สมัครสมาชิกร้านค้า
Route::post('register_shop','ShopController@postRegister1');

Route::post('/login_Shop1', 'ShopController@getlogin_shop1');//เข้าสู่ระบบร้านค้า


Route::get('/home', 'HomeController@index')->name('home');
Route::get('Shop_productlist{shop_id}', 'ShopController@getListPro');//แสดงหน้าสินค้า
Route::get('Shop_detailproduct{id}', 'ShopController@getListPro2');//หน้าแสดงหน้าสินค้า 2 เพิ่มเติม

Route::get('Shop_addproduct{shop_id}','ShopController@getForm'); //หน้าเพิ่ม
Route::post('addproduct','ShopController@postForm');


Route::get('Shop_editproduct{id}_{shop_id}','ShopController@getEdit');//แก้ไขสินค้า
Route::post('updateproduct','ShopController@updateForm');//

Route::get('del{id}_{shop_id}','ShopController@del_product');//ลบคอร์ส

Route::get('Shop_editprofile{shop_id}','ShopController@geteditprofile');//แก้ไขโปรไฟล์
Route::post('UpdateProfile','ShopController@updateProfile');//


Route::get('/Customer_register', function () {//สมัครสมาชิกลูกค้า
    return view('Customer_register');
});
Route::post('register_customer','CustomerController@postRegister2');


Route::get('/Customer_productlist', function () {//สินค้า
    return view('Customer_productlist');
});
Route::get('/Customer_detailproduct', function () {//สินค้า
    return view('Customer_detailproduct');
});