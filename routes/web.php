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


//Route::group(['/admin', 'prefix'=> 'admin'],function (){
//
//    Route::group(['prefix' => 'login'], function() {
//        Route::get('/', 'Admin\LoginController@getLogin');
//        Route::post('/', 'Admin\LoginController@postLogin');
//    });
//
//
//    Route::group(['middleware' => 'auth'], function (){
//        Route::get('/home', function (){
//            return view('admin.layouts.index');
//        });
//    });
//
//
//});

Route::post('/admin/login', 'Admin\LoginController@postLogin')->name('post_admin_login');
Route::get('/admin/login', [ 'uses' => 'Admin\LoginController@getLogin'])->name('admin_login');

Route::group(['middleware' => 'checkAdminLogin', '/admin', 'prefix'=> 'admin'],function () {
    Route::group(['middleware' => 'checkAdminLogin', 'prefix' => '/', 'namespace' => 'admin'], function () {
        Route::get('/home', function () {
            return view('admin.layouts.dashboard');
        })->name('admin_home');
    });
    Route::get('/logout', ['uses' => 'Admin\LoginController@logout'])->name('admin_logout');



    // dashboard
    Route::get('/dashboard', function (){
        return view('admin.layouts.dashboard');
    })->name('admin_dashboard');



    // tin tức

    Route::get('/family_tree/list', [ 'uses' => 'Admin\FamilyTree\FamilyTreeController@index'])->name('admin_family_tree_list');
    Route::get('/family_tree/add', [ 'uses' => 'Admin\FamilyTree\FamilyTreeController@view_add'])->name('admin_family_tree_add');
    Route::post('/family_tree/add', [ 'uses' => 'Admin\FamilyTree\FamilyTreeController@add'])->name('post_admin_family_tree_add');
    Route::get('/family_tree/edit/{id}', [ 'uses' => 'Admin\FamilyTree\FamilyTreeController@view_edit'])->name('admin_edit_family_tree');
    Route::post('/family_tree/edit/{id}', [ 'uses' => 'Admin\FamilyTree\FamilyTreeController@update'])->name('post_admin_edit_family_tree');
    Route::post('/family_tree/delete', [ 'uses' => 'Admin\products\FamilyTree\FamilyTreeController@destroy'])->name('admin_delete_family_tree');


    // products
    Route::get('/product/config/style', [ 'uses' => 'Admin\products\StyleController@index'])->name('admin_product_style');
    Route::get('/product/config/style/add', [ 'uses' => 'Admin\products\StyleController@view_add'])->name('admin_product_style_add');
    Route::post('/product/config/style/add', [ 'uses' => 'Admin\products\StyleController@add'])->name('post_admin_product_style_add');
    Route::get('/product/config/style/edit/{id}', [ 'uses' => 'Admin\products\StyleController@view_edit'])->name('admin_edit_product_style');
    Route::post('/product/config/style/edit/{id}', [ 'uses' => 'Admin\products\StyleController@update'])->name('post_admin_edit_product_style');

    Route::get('/product/config/color', [ 'uses' => 'Admin\products\ColorController@index'])->name('admin_product_color');
    Route::get('/product/config/color/add', [ 'uses' => 'Admin\products\ColorController@view_add'])->name('admin_product_color_add');
    Route::post('/product/config/color/add', [ 'uses' => 'Admin\products\ColorController@add'])->name('post_admin_product_color_add');
    Route::get('/product/config/color/edit/{id}', [ 'uses' => 'Admin\products\ColorController@view_edit'])->name('admin_edit_product_color');
    Route::post('/product/config/color/edit/{id}', [ 'uses' => 'Admin\products\ColorController@update'])->name('post_admin_edit_product_color');

    Route::get('/product/config/size', [ 'uses' => 'Admin\products\SizeController@index'])->name('admin_product_size');
    Route::get('/product/config/size/add', [ 'uses' => 'Admin\products\SizeController@view_add'])->name('admin_product_size_add');
    Route::post('/product/config/size/add', [ 'uses' => 'Admin\products\SizeController@add'])->name('post_admin_product_size_add');
    Route::get('/product/config/size/edit/{id}', [ 'uses' => 'Admin\products\SizeController@view_edit'])->name('admin_edit_product_size');
    Route::post('/product/config/size/edit/{id}', [ 'uses' => 'Admin\products\SizeController@update'])->name('post_admin_edit_product_size');


    Route::get('/product/category', [ 'uses' => 'Admin\products\ProductsCategoryController@index'])->name('admin_products_category');
    Route::get('/product/category/add', [ 'uses' => 'Admin\products\ProductsCategoryController@view_add'])->name('admin_add_products_category');
    Route::post('/product/category/add', [ 'uses' => 'Admin\products\ProductsCategoryController@add'])->name('post_admin_add_products_category');
    Route::get('/product/category/edit/{id}', [ 'uses' => 'Admin\products\ProductsCategoryController@view_edit'])->name('admin_edit_products_category');
    Route::post('/product/category/edit/{id}', [ 'uses' => 'Admin\products\ProductsCategoryController@update'])->name('post_admin_edit_products_category');

    Route::get('/product/product', [ 'uses' => 'Admin\products\ProductsController@index'])->name('admin_products_products');
    Route::get('/product/product/add', [ 'uses' => 'Admin\products\ProductsController@create'])->name('admin_add_products_products');
    Route::post('/product/product', [ 'uses' => 'Admin\products\ProductsController@store'])->name('post_admin_add_products_products');
    Route::get('/product/product/edit/{id}', [ 'uses' => 'Admin\products\ProductsController@show'])->name('admin_edit_products_products');
    Route::post('/product/product/delete/image', [ 'uses' => 'Admin\products\ProductsController@deleteItemImage'])->name('delete_item_image_in_detail_product');
    Route::post('/product/product/delete/option', [ 'uses' => 'Admin\products\ProductsController@deleteOption'])->name('delete_item_option_in_detail_product');
    Route::post('/product/product/edit/{id}', [ 'uses' => 'Admin\products\ProductsController@update'])->name('post_admin_edit_products_products');
    Route::post('/product/product/delete', [ 'uses' => 'Admin\products\ProductsController@destroy'])->name('admin_delete_products_products');




});



// ROUTE CLIENT

Route::get('/home.html', ['uses' => 'Client\HomeController@index'])->name('client_home');

